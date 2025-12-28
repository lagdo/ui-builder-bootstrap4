<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\TableComponent;

trait TableBuilderTrait
{
    /**
     * @return string
     */
    protected function _tableComponentClass(): string
    {
        return TableComponent::class;
    }
}
