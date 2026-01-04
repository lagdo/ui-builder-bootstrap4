<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\BreadcrumbComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\BreadcrumbItemComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\MenuComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\MenuItemComponent;

trait MenuBuilderTrait
{
    /**
     * @return void
     */
    protected function _initMenuBuilder(): void
    {
        $this->menuComponentClass = MenuComponent::class;
        $this->menuItemComponentClass = MenuItemComponent::class;
        $this->breadcrumbComponentClass = BreadcrumbComponent::class;
        $this->breadcrumbItemComponentClass = BreadcrumbItemComponent::class;
    }
}
