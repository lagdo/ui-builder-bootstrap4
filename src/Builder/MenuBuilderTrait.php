<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait MenuBuilderTrait
{
    /**
     * @return void
     */
    protected function _initMenuBuilder(): void
    {
        $this->menuComponentClass = Component\MenuComponent::class;
        $this->menuItemComponentClass = Component\MenuItemComponent::class;
        $this->breadcrumbComponentClass = Component\BreadcrumbComponent::class;
        $this->breadcrumbItemComponentClass = Component\BreadcrumbItemComponent::class;
    }
}
