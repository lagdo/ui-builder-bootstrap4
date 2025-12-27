<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Html\ButtonGroupElement as BaseElement;

class ButtonGroupElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('btn-group');
        $this->setAttribute('role', 'group');
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->addClass('d-flex');
        return $this;
    }
}
