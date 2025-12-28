<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\TabNavComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\TabNavItemComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\TabContentComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\TabContentItemComponent;

trait TabBuilderTrait
{
    /**
     * @return string
     */
    protected function _tabNavComponentClass(): string
    {
        return TabNavComponent::class;
    }

    /**
     * @return string
     */
    protected function _tabNavItemComponentClass(): string
    {
        return TabNavItemComponent::class;
    }

    /**
     * @return string
     */
    protected function _tabContentComponentClass(): string
    {
        return TabContentComponent::class;
    }

    /**
     * @return string
     */
    protected function _tabContentItemComponentClass(): string
    {
        return TabContentItemComponent::class;
    }
}
