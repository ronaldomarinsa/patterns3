<?php
namespace BVW;

use BVW\Interfaces\FormInterface;
use BVW\Interfaces\FormElementInterface;

class Form implements FormInterface
{
    /**
     *
     * @var FormElementInterface[]
     */
    private $campos = array();
    
    private $action = "";
    private $method = "POST";
    private $class = "";
    
    public function __construct($action = "", $class = "", $method = "POST")
    {
        $this->action = $action;
        $this->class = $class;
        $this->method = $method;
    }
    
    public function adicionaCampo(FormElementInterface $campo)
    {
        $this->campos[] = $campo;
        
        return $this;
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
