<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\PanelBodyComponent as BaseComponent;

class PanelBodyComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('card-body');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
    {
        $this->element()->addClass("text-$style");
        return $this;
    }
}
