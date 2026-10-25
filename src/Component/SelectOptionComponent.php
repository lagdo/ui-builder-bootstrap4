<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\SelectOptionComponent as BaseComponent;

class SelectOptionComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('form-control');
    }
}
