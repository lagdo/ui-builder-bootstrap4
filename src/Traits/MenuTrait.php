<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

trait MenuTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function menu(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('list-group');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuItem(...$arguments): self
    {
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('list-group-item list-group-item-action');
        $this->builder->setAttribute('href', 'javascript:void(0)');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuActiveItem(...$arguments): self
    {
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('list-group-item list-group-item-action active');
        $this->builder->setAttribute('href', 'javascript:void(0)');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuDisabledItem(...$arguments): self
    {
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('list-group-item list-group-item-action disabled');
        $this->builder->setAttribute('href', 'javascript:void(0)');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function breadcrumb(...$arguments): self
    {
        $this->builder->createWrapper('nav', ['aria-label' => 'breadcrumb']);
        $this->builder->createScope('ol', $arguments);
        $this->builder->prependClass('breadcrumb');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function breadcrumbItem(bool $active, ...$arguments): self
    {
        $this->builder->createScope('li', $arguments);
        $this->builder->prependClass($active ? 'breadcrumb-item active' : 'breadcrumb-item');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdown(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('btn-group');
        $this->builder->setAttribute('role', 'group');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownItem(string $style = 'default', ...$arguments): self
    {
        $this->builder->createScope('button', $arguments);
        $this->builder->prependClass("btn btn-$style dropdown-toggle");
        $this->builder->setAttributes(['data-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenu(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('dropdown-menu');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenuItem(...$arguments): self
    {
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('dropdown-item');
        $this->builder->setAttribute('href', '#');
        return $this;
    }
}
