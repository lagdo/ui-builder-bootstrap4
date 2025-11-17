<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Element\PaginationElement;
use Lagdo\UiBuilder\Bootstrap4\Element\PaginationItemElement;
use Lagdo\UiBuilder\Element\PaginationInterface;
use Lagdo\UiBuilder\Element\PaginationItemInterface;

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
