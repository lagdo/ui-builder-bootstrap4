<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\DropdownComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownItemComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownMenuComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownMenuItemComponent;

trait DropdownBuilderTrait
{
    /**
     * @return void
     */
    protected function _initDropdownBuilder(): void
    {
        $this->dropdownComponentClass = DropdownComponent::class;
        $this->dropdownItemComponentClass = DropdownItemComponent::class;
        $this->dropdownMenuComponentClass = DropdownMenuComponent::class;
        $this->dropdownMenuItemComponentClass = DropdownMenuItemComponent::class;
    }
}
