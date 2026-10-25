<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;

class TextareaComponent extends BaseComponent
{
    use Mixin\ValidationTrait;

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('form-control');
    }
}
