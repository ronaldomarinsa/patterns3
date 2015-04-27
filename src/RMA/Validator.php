<?php
namespace RMA;

use RMA\Request;

class Validator
{
    private $request;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
