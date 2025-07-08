<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\PanelBodyElement as BaseElement;

class PanelBodyElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('card-body');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function style(string $style): static
    {
        $this->addClass("text-$style");
        return $this;
    }
}
