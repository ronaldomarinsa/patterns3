<?php
namespace RMA;

use RMA\Interfaces\FormElementInterface;

class Divider implements FormElementInterface
{
    public function __construct()
    {
        
    }
    
    public function getId()
    {
        
    }
    
    public function getElement()
    {
        return "<br />";
    }
}
