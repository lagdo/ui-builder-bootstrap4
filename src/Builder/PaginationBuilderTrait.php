<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\PaginationComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\PaginationItemComponent;

trait PaginationBuilderTrait
{
    /**
     * @return string
     */
    protected function _paginationComponentClass(): string
    {
        return PaginationComponent::class;
    }

    /**
     * @return string
     */
    protected function _paginationItemComponentClass(): string
    {
        return PaginationItemComponent::class;
    }
}
