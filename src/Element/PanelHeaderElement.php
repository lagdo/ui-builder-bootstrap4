<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\PanelHeaderElement as BaseElement;

class PanelHeaderElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('card-header');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function style(string $style): static
    {
        $this->addClass("border-$style");
        return $this;
    }
}
