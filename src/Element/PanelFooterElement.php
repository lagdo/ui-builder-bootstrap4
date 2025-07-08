<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\PanelFooterElement as BaseElement;

class PanelFooterElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->prependClass('card-footer');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function style(string $style): static
    {
        $this->appendClass("border-$style");
        return $this;
    }
}
