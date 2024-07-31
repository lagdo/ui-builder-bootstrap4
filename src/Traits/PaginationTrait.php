<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait PaginationTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function pagination(...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('nav', ['aria-label' => '']);
        $this->builder->createScope('ul', $arguments);
        $this->builder->prependClass('pagination');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'page-item']);
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('page-link');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationActiveItem(...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'page-item active']);
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('page-link');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationDisabledItem(...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'disabled']);
        $this->builder->createScope('span', $arguments);
        $this->builder->prependClass('page-link');
        return $this;
    }
}
