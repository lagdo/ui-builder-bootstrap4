<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait LayoutBuilderTrait
{
    /**
     * @return void
     */
    protected function initLayoutBuilder(): void
    {
        $this->alertComponentClass = Component\AlertComponent::class;
        $this->badgeComponentClass = Component\BadgeComponent::class;
    }
}
