<?php
namespace RMA\Interfaces;

use RMA\Interfaces\FormElementInterface;

interface FieldContainerInterface
{
    public function adicionaCampo(FormElementInterface $campo);
}
