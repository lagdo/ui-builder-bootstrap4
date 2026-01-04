<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\PanelComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\PanelBodyComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\PanelFooterComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\PanelHeaderComponent;

trait PanelBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPanelBuilder(): void
    {
        $this->panelComponentClass = PanelComponent::class;
        $this->panelHeaderComponentClass = PanelHeaderComponent::class;
        $this->panelBodyComponentClass = PanelBodyComponent::class;
        $this->panelFooterComponentClass = PanelFooterComponent::class;
    }
}
