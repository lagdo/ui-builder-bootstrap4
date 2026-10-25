<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\PanelMenuItemComponent as BaseComponent;

class PanelMenuItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('list-group-item');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->element()->addClass('active');
        }
        if (!$this->prop('enabled', true)) {
            $this->element()->addClass('disabled');
        }
    }
}
