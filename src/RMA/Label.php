<?php
namespace RMA;

use RMA\Interfaces\FormElementInterface;

class Label implements FormElementInterface
{
    private $id;
    private $for;
    private $class;    
    private $value;
    
    public function __construct(array $options = array())
    {
        foreach ($options as $attribute => $value) {
            $this->{$attribute} = $value;            
        }
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getElement()
    {
        $el = "<label ";
        $el .= "for=\"{$this->for}\" ";
        $el .= "class=\"{$this->class}\" ";
        $el .= ">{$this->value}</label>";
        
        return $el;
    }
}
