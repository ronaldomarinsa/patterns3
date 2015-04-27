<?php
namespace RMA;

use RMA\Interfaces\FieldContainerInterface;
use RMA\Interfaces\FormElementInterface;

class Fieldset implements FormElementInterface, FieldContainerInterface
{
    use Traits\FieldContainerTrait;
    
    private $id;
    private $class;
    
    public function __construct()
    {
        
    }
    
    public function getElement()
    {
        $el = "<fieldset";
        $el .= " id=\"{$this->id}\"";
        $el .= " class=\"{$this->class}\">\n";
        
        foreach ($this->campos as $field) {
            $el .= $field->getElement();
        }
        $el .= "</fieldset>\n";
        
        return $el;
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    public function getClass()
    {
        return $this->class;
    }
    
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

}
