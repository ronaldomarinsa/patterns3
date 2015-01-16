<?php
namespace BVW;

use BVW\Request;

class Validator
{
    private $request;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
