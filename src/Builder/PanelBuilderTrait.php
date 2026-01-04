<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait PanelBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPanelBuilder(): void
    {
        $this->panelComponentClass = Component\PanelComponent::class;
        $this->panelHeaderComponentClass = Component\PanelHeaderComponent::class;
        $this->panelBodyComponentClass = Component\PanelBodyComponent::class;
        $this->panelFooterComponentClass = Component\PanelFooterComponent::class;
    }
}
