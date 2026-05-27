<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait DropdownBuilderTrait
{
    /**
     * @return void
     */
    protected function initDropdownBuilder(): void
    {
        $this->dropdownComponentClass = Component\DropdownComponent::class;
        $this->dropdownButtonComponentClass = Component\DropdownButtonComponent::class;
        $this->dropdownMenuComponentClass = Component\DropdownMenuComponent::class;
        $this->dropdownMenuItemComponentClass = Component\DropdownMenuItemComponent::class;
    }
}
