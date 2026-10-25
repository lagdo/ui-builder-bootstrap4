<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('list-group');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        // Vertical is the default. Nothing to do.
        if ($this->isVertical()) {
            $this->element()->addClass('list-group-horizontal');
        }
    }
}
