<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;

trait PanelTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function panel(string $style = 'default'): self
    {
        $this->options['card-style'] = $style;
        $arguments = func_get_args();
        array_shift($arguments);
        $this->createScope('div', $arguments);
        $this->prependClass("card border-$style w-100");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelHeader(): self
    {
        $style = $this->options['card-style'];
        $this->createScope('div', func_get_args());
        $this->prependClass("card-header border-$style");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelBody(): self
    {
        $style = $this->options['card-style'];
        $this->createScope('div', func_get_args());
        $this->prependClass("card-body text-$style");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelFooter(): self
    {
        $style = $this->options['card-style'];
        $this->createScope('div', func_get_args());
        $this->prependClass("card-footer border-$style");
        return $this;
    }
}
