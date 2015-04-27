<?php
namespace RMA;

use RMA\Interfaces\FormElementInterface;

class Textarea implements FormElementInterface
{
    private $id;
    private $name;
    private $rows = 5;
    private $class;
    private $value;
    private $required = false;
    
    public function __construct(array $options = array())
    {
        foreach ($options as $attribute => $value) {
            $this->$attribute = $value;
        }
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getElement()
    {
        $el = "<textarea ";
        $el .= "id=\"{$this->id}\" ";
        $el .= "name=\"{$this->name}\" ";
        $el .= "rows=\"{$this->rows}\" ";
        $el .= "class=\"{$this->class}\" ";
        $el .= "required=\"{$this->required}\" ";
        $el .= ">{$this->value}</textarea>";
        
        return $el;
    }
}
