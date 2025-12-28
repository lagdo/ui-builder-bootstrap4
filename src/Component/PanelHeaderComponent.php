<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\PanelHeaderComponent as BaseComponent;

class PanelHeaderComponent extends BaseComponent
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
    public function look(string $style): static
    {
        $this->addClass("border-$style");
        return $this;
    }
}
