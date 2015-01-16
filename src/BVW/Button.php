<?php
namespace BVW;

use BVW\Interfaces\FormElementInterface;

class Button implements FormElementInterface
{
    private $type = "reset";
    private $class;
    private $value = "Button";
    
    public function __construct($type="reset", array $options = array())
    {
        $this->class = isset($options["class"]) ? $options["class"] : null;
        $this->value = isset($options["value"]) ? $options["value"] : "Button";
        $this->type = $type;
    }
    
    public function getElement()
    {
        $el = "<button type=\"{$this->type}\"";
        $el .= " class=\"{$this->class}\"";
        $el .= ">{$this->value}</button>";
        
        return $el;
    }

    public function getId()
    {
    }

}
