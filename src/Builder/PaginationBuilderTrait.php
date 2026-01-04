<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait PaginationBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPaginationBuilder(): void
    {
        $this->paginationComponentClass = Component\PaginationComponent::class;
        $this->paginationItemComponentClass = Component\PaginationItemComponent::class;
    }
}
