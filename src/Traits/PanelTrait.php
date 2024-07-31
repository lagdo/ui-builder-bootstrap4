<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait PanelTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function panel(string $style = 'default', ...$arguments): BuilderInterface
    {
        $this->options['card-style'] = $style;
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("card border-$style w-100");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelHeader(...$arguments): BuilderInterface
    {
        $style = $this->options['card-style'];
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("card-header border-$style");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelBody(...$arguments): BuilderInterface
    {
        $style = $this->options['card-style'];
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("card-body text-$style");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelFooter(...$arguments): BuilderInterface
    {
        $style = $this->options['card-style'];
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("card-footer border-$style");
        return $this;
    }
}
