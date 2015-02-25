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
            $method = "set" . ucfirst($attribute);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
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
    
    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
 
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }
}
