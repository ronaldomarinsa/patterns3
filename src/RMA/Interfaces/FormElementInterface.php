<?php
namespace RMA\Interfaces;

interface FormElementInterface
{
    public function __construct();
    public function getId();
    public function getElement();
}
