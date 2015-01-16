<?php
namespace BVW;

use BVW\Interfaces\FormElementInterface;

class Button implements FormElementInterface
{
    private $type = "reset";
    private $class;
    private $value = "Button";
    
    public function __construct($class = "", $value = "Button", $type="reset")
    {
        $this->class = $class;
        $this->value = $value;
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
