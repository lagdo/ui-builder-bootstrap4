<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Element\ColElement;
use Lagdo\UiBuilder\Bootstrap4\Element\RowElement;
use Lagdo\UiBuilder\Element\ColInterface;
use Lagdo\UiBuilder\Element\RowInterface;

trait LayoutTrait
{
    /**
     * @inheritDoc
     */
    public function row(...$arguments): RowInterface
    {
        return $this->createElementOfClass(RowElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function col(...$arguments): ColInterface
    {
        return $this->createElementOfClass(ColElement::class, $arguments);
    }
}
