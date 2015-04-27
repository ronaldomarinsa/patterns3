<?php
namespace RMA\Interfaces;

interface FormInterface
{
    public function createField($field, $type = null, array $options = array());
    public function render();
}
