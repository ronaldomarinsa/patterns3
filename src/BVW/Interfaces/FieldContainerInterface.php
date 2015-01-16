<?php
namespace BVW\Interfaces;

use BVW\Interfaces\FormElementInterface;

interface FieldContainerInterface
{
    public function adicionaCampo(FormElementInterface $campo);
}
