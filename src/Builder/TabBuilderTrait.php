<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait TabBuilderTrait
{
    /**
     * @return void
     */
    protected function _initTabBuilder(): void
    {
        $this->tabNavComponentClass = Component\TabNavComponent::class;
        $this->tabNavItemComponentClass = Component\TabNavItemComponent::class;
        $this->tabContentComponentClass = Component\TabContentComponent::class;
        $this->tabContentItemComponentClass = Component\TabContentItemComponent::class;
    }
}
