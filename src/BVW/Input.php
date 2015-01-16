<?php
namespace BVW;

use BVW\Interfaces\FormElementInterface;

class Input implements FormElementInterface
{
    private $validTypes = array("text","email","number");
    private $type;
    private $id;
    private $name;
    private $class;
    private $value;
    private $placeholder;
    private $required = false;
    
    public function __construct($type = "text", array $options = array())
    {
        if (!in_array($type, $this->validTypes)) {
            $type = "text";
        }
        $this->type = $type;
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
        $el = "<input type=\"{$this->type}\" ";
        $el .= "id=\"{$this->id}\" ";
        $el .= "name=\"{$this->name}\" ";
        $el .= "class=\"{$this->class}\" ";
        $el .= "value=\"{$this->value}\" ";
        $el .= "placeholder=\"{$this->placeholder}\" ";
        $el .= "required=\"{$this->required}\" ";
        $el .= " />";
        
        return $el;
    }
}
