<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\AlertComponent as BaseComponent;

class AlertComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('alert')
            ->setAttribute('role', 'alert');
    }

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $level = $this->prop('level', null);
        $level = $level?->value ?? 'dark';
        $this->element()->addClass("alert-$level");
    }
}
