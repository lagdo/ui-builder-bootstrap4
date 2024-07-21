<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;

trait LayoutTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function row(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('row');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function col(int $width = 12): self
    {
        if ($width < 1 || $width > 12) {
            $width = 12; // Full width by default.
        }
        $arguments = func_get_args();
        array_shift($arguments);
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("col-md-$width");
        return $this;
    }
}
