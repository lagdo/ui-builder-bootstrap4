<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\CardFooterComponent as BaseComponent;

class CardFooterComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('card-footer');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function skin(string $style): static
    {
        $this->element()->addClass("border-$style");
        return $this;
    }
}
