<?php
namespace RMA\Traits;

use RMA\Interfaces\FormElementInterface;

trait FieldContainerTrait
{
    /**
     *
     * @var FormElementInterface[]
     */
    protected $campos = array();
    
    public function adicionaCampo(FormElementInterface $campo)
    {
        $this->campos[] = $campo;        
        return $this;
    }
}