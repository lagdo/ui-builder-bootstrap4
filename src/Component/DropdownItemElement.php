<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Html\DropdownItemElement as BaseElement;

class DropdownItemElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('btn');
        $this->addClass('dropdown-toggle');
        $this->setAttributes(['data-toggle' => 'dropdown',
            'aria-haspopup' => 'true', 'aria-expanded' => 'false']);
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function style(string $style): static
    {
        $this->addBaseClass("btn-$style");
        return $this;
    }
}
