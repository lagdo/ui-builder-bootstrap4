<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\PanelElement as BaseElement;

class PanelElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('card w-100');
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
