<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;

class SelectComponent extends BaseComponent
{
    use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('custom-select');
        if ($this->prop('shrink', false)) {
            $this->addClass('w-auto')->setStyle('flex: 0 1 auto;');
        }
    }
}
