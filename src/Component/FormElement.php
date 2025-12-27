<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Html\FormElement as BaseElement;

class FormElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    public function horizontal(bool $horizontal = true): static
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function wrapped(bool $wrapped = true): static
    {
        $wrapped && $this->addWrapper('div', ['class' => 'portlet-body form']);
        return $this;
    }
}
