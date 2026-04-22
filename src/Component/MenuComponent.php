<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\MenuComponent as BaseComponent;

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
     * @return static
     */
    public function vertical(): static
    {
        // Nothing to do. It is the default.
        return $this;
    }

    /**
     * @return static
     */
    public function horizontal(): static
    {
        $this->element()->addClass('list-group-horizontal');
        return $this;
    }
}
