<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\PaginationElement;
use Lagdo\UiBuilder\Bootstrap4\Component\PaginationItemElement;
use Lagdo\UiBuilder\Component\PaginationInterface;
use Lagdo\UiBuilder\Component\PaginationItemInterface;

trait PaginationTrait
{
    /**
     * @inheritDoc
     */
    public function pagination(...$arguments): PaginationInterface
    {
        return $this->createElementOfClass(PaginationElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(...$arguments): PaginationItemInterface
    {
        return $this->createElementOfClass(PaginationItemElement::class, $arguments);
    }
}
