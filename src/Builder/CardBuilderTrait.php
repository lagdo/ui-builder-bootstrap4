<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait CardBuilderTrait
{
    /**
     * @return void
     */
    protected function initCardBuilder(): void
    {
        $this->cardComponentClass = Component\CardComponent::class;
        $this->cardHeaderComponentClass = Component\CardHeaderComponent::class;
        $this->cardBodyComponentClass = Component\CardBodyComponent::class;
        $this->cardFooterComponentClass = Component\CardFooterComponent::class;
    }
}
