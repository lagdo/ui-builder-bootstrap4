<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\ButtonGroupComponent as BaseComponent;

class ButtonGroupComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn-group');
        $this->element()->setAttribute('role', 'group');
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->element()->addClass('d-flex');
        return $this;
    }
}
