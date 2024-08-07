<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function rtrim;
use function ltrim;

trait FormTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function form(bool $horizontal = false, bool $wrapped = false, ...$arguments): BuilderInterface
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
    public function formRow(...$arguments): BuilderInterface
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
