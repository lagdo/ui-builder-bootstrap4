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
        $this->addBaseClass('card-footer');
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
