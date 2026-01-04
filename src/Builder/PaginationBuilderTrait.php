<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\PaginationComponent;
use Lagdo\UiBuilder\Bootstrap4\Component\PaginationItemComponent;

trait PaginationBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPaginationBuilder(): void
    {
        $this->paginationComponentClass = PaginationComponent::class;
        $this->paginationItemComponentClass = PaginationItemComponent::class;
    }
}
