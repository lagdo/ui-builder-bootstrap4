<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;
use function rtrim;
use function ltrim;

trait FormTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function form(bool $horizontal = false, bool $wrapped = false, ...$arguments): self
    {
        if ($wrapped) {
            $this->builder->createWrapper('div', ['class' => 'portlet-body form']);
        }
        $this->builder->createScope('form', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function formRow(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('form-group row');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function formRowClass(string $class = ''): string
    {
        return rtrim('form-group row ' . ltrim($class));
    }

    /**
     * @inheritDoc
     */
    protected function _formTagClass(string $tagName): string
    {
        if ($tagName === 'label') {
            return 'col-form-label';
        }
        return 'form-control';
    }
}
