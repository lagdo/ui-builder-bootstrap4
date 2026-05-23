<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait TabBuilderTrait
{
    /**
     * @return void
     */
    protected function initTabBuilder(): void
    {
        $this->tabsComponentClass = Component\TabsComponent::class;
        $this->tabNavComponentClass = Component\TabNavComponent::class;
        $this->tabNavItemComponentClass = Component\TabNavItemComponent::class;
        $this->tabContentComponentClass = Component\TabContentComponent::class;
        $this->tabContentItemComponentClass = Component\TabContentItemComponent::class;
    }
}
