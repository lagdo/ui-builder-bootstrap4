<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\DropdownComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownItemComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownMenuComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownMenuItemComponent;

trait DropdownBuilderTrait
{
    /**
     * @return string
     */
    protected function _dropdownComponentClass(): string
    {
        return DropdownComponent::class;
    }

    /**
     * @return string
     */
    protected function _dropdownItemComponentClass(): string
    {
        return DropdownItemComponent::class;
    }

    /**
     * @return string
     */
    protected function _dropdownMenuComponentClass(): string
    {
        return DropdownMenuComponent::class;
    }

    /**
     * @return string
     */
    protected function _dropdownMenuItemComponentClass(): string
    {
        return DropdownMenuItemComponent::class;
    }
}
