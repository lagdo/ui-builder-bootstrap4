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
        $this->rowComponentClass = Component\GridRowComponent::class;
        $this->colComponentClass = Component\GridColComponent::class;
    }
}
