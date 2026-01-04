<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\TabNavComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\TabNavItemComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\TabContentComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\TabContentItemComponent;

trait TabBuilderTrait
{
    /**
     * @return void
     */
    protected function _initTabBuilder(): void
    {
        $this->tabNavComponentClass = TabNavComponent::class;
        $this->tabNavItemComponentClass = TabNavItemComponent::class;
        $this->tabContentComponentClass = TabContentComponent::class;
        $this->tabContentItemComponentClass = TabContentItemComponent::class;
    }
}
