<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\DropdownComponent as BaseComponent;

use function is_a;

class DropdownComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('dropdown');

        if (is_a($this->parent(), ButtonGroupComponent::class)) {
            $this->element()->setGhost(true);
        }
    }
}
