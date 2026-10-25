<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\InputComponent as BaseComponent;

class InputComponent extends BaseComponent
{
    use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->element()->getAttribute('type') === 'hidden') {
            return;
        }

        $this->addBaseClass('form-control');
    }
}
