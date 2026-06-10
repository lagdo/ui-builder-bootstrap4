<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('list-group');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        // Vertical is the default. Nothing to do.
        if ($this->prop('horizontal', false)) {
            $this->element()->addClass('list-group-horizontal');
        }
    }
}
