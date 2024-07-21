<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function func_get_args;

trait PaginationTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function pagination(): self
    {
        $this->createWrapper('nav', ['aria-label' => '']);
        $this->createScope('ul', func_get_args());
        $this->prependClass('pagination');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(): self
    {
        $this->createWrapper('li', ['class' => 'page-item']);
        $this->createScope('a', func_get_args());
        $this->prependClass('page-link');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationActiveItem(): self
    {
        $this->createWrapper('li', ['class' => 'page-item active']);
        $this->createScope('a', func_get_args());
        $this->prependClass('page-link');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationDisabledItem(): self
    {
        $this->createWrapper('li', ['class' => 'disabled']);
        $this->createScope('span', func_get_args());
        $this->prependClass('page-link');
        return $this;
    }
}
