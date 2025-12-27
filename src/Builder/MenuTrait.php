<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\BreadcrumbComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\BreadcrumbItemComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownItemComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownMenuComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\DropdownMenuItemComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\MenuComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\MenuItemComponent;

trait MenuTrait
{
    /**
     * @inheritDoc
     */
    public function menu(...$arguments): MenuComponent
    {
        return $this->createElementOfClass(MenuComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function menuItem(...$arguments): MenuItemComponent
    {
        return $this->createElementOfClass(MenuItemComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function breadcrumb(...$arguments): BreadcrumbComponent
    {
        return $this->createElementOfClass(BreadcrumbComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function breadcrumbItem(...$arguments): BreadcrumbItemComponent
    {
        return $this->createElementOfClass(BreadcrumbItemComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function dropdown(...$arguments): DropdownComponent
    {
        return $this->createElementOfClass(DropdownComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function dropdownItem(...$arguments): DropdownItemComponent
    {
        return $this->createElementOfClass(DropdownItemComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenu(...$arguments): DropdownMenuComponent
    {
        return $this->createElementOfClass(DropdownMenuComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenuItem(...$arguments): DropdownMenuItemComponent
    {
        return $this->createElementOfClass(DropdownMenuItemComponent::class, $arguments);
    }
}
