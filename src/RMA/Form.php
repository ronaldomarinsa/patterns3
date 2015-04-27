<?php
namespace RMA;

use RMA\Interfaces\FormInterface;
use RMA\Interfaces\FieldContainerInterface;
use RMA\Validator;

class Form implements FormInterface, FieldContainerInterface
{
    use Traits\FieldContainerTrait;
    
    private $action = "";
    private $method = "POST";
    private $class = "";
    private $validator;
    
    public function __construct(Validator $validator, $action = "", $class = "", $method = "POST")
    {
        $this->validator = $validator;
        $this->action = $action;
        $this->class = $class;
        $this->method = $method;
    }
    
    /**
     * Creates a Field
     * 
     * @param string $field
     * @param string $type
     * @param array $options
     * @return FormFieldInterface
     */
    public function createField($field, $type = null, array $options = array())
    {
        $className = "RMA\\" . ucfirst(strtolower($field));
        if (!class_exists($className)) {
            throw new \InvalidArgumentException("Classe {$field} inexistente.");
        }
        $ref = new \ReflectionClass($className);
        $params = $ref->getConstructor()->getParameters();

        if (count($params) == 2) {
            $field = new $className($type, $options);
        } elseif (count($params) == 1) {
            $field = new $className($options);
        } else {
            $field = new $className();
        }
        
        return $field;
    }
      
    public function render()
    {
        $form = "<form ";
        $form .= "action=\"{$this->action}\" ";
        $form .= "method=\"{$this->method}\" ";
        $form .= "class=\"{$this->class}\">\n";
        
        foreach ($this->campos as $el) {
            $form .= $el->getElement() . "\n";
        }
        $form .= "</form>\n";
        
        echo $form;
    }
}
