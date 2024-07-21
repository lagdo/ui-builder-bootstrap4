<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;

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
    public function menu(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('list-group');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuItem(): self
    {
        $this->builder->createScope('a', func_get_args());
        $this->builder->prependClass('list-group-item list-group-item-action');
        $this->builder->setAttribute('href', 'javascript:void(0)');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuActiveItem(): self
    {
        $this->builder->createScope('a', func_get_args());
        $this->builder->prependClass('list-group-item list-group-item-action active');
        $this->builder->setAttribute('href', 'javascript:void(0)');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuDisabledItem(): self
    {
        $this->builder->createScope('a', func_get_args());
        $this->builder->prependClass('list-group-item list-group-item-action disabled');
        $this->builder->setAttribute('href', 'javascript:void(0)');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function breadcrumb(): self
    {
        $this->builder->createWrapper('nav', ['aria-label' => 'breadcrumb']);
        $this->builder->createScope('ol', func_get_args());
        $this->builder->prependClass('breadcrumb');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function breadcrumbItem(bool $active): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        $this->builder->createScope('li', $arguments);
        $this->builder->prependClass($active ? 'breadcrumb-item active' : 'breadcrumb-item');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdown(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('btn-group');
        $this->builder->setAttribute('role', 'group');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownItem(string $style = 'default'): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        $this->builder->createScope('button', $arguments);
        $this->builder->prependClass("btn btn-$style dropdown-toggle");
        $this->builder->setAttributes(['data-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenu(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('dropdown-menu');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenuItem(): self
    {
        $this->builder->createScope('a', func_get_args());
        $this->builder->prependClass('dropdown-item');
        $this->builder->setAttribute('href', '#');
        return $this;
    }
}
