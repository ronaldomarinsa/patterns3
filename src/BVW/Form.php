<?php
namespace BVW;

use BVW\Interfaces\FormInterface;
use BVW\Interfaces\FieldContainerInterface;
use BVW\Input;
use BVW\Textarea;
use BVW\Label;
use BVW\Divider;
use BVW\Button;
use BVW\Validator;

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
        switch (strtolower($field)) {
            case "input":
                $field = new Input($type, $options);
                break;
            case "textarea":
                $field = new Textarea($options);
                break;
            case "label":
                $field = new Label($options);
                break;
            case "button":
                $field = new Button($type, $options);
                break;
            default:
                $field = new Divider();
        }
        
        return $field;
    }
      
    public function render()
    {
        echo $this;
    }
    
    public function __toString()
    {
        $form = "<form ";
        $form .= "action=\"{$this->action}\" ";
        $form .= "method=\"{$this->method}\" ";
        $form .= "class=\"{$this->class}\">\n";
        foreach ($this->campos as $el) {
            $form .= $el->getElement() . "\n";
        }
        $form .= "</form>\n";
        
        return $form;
        
    }
}
