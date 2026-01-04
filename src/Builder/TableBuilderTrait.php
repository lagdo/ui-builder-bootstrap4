<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait TableBuilderTrait
{
    /**
     * @return void
     */
    protected function _initTableBuilder(): void
    {
        $this->tableComponentClass = Component\TableComponent::class;
    }
}
