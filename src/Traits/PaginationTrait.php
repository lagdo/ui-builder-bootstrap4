<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

trait PaginationTrait
{
    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function pagination(...$arguments): self
    {
        $this->builder->createWrapper('nav', ['aria-label' => '']);
        $this->builder->createScope('ul', $arguments);
        $this->builder->prependClass('pagination');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(...$arguments): self
    {
        $this->builder->createWrapper('li', ['class' => 'page-item']);
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('page-link');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationActiveItem(...$arguments): self
    {
        $this->builder->createWrapper('li', ['class' => 'page-item active']);
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('page-link');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationDisabledItem(...$arguments): self
    {
        $this->builder->createWrapper('li', ['class' => 'disabled']);
        $this->builder->createScope('span', $arguments);
        $this->builder->prependClass('page-link');
        return $this;
    }
}
