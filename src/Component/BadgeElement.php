<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Html\BadgeElement as BaseElement;

class BadgeElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('badge');
    }

    /**
     * @param string $type
     *
     * @return static
     */
    public function type(string $type): static
    {
        $this->addClass("badge-$type");
        return $this;
    }

    /**
     * @param string $rounded
     *
     * @return static
     */
    public function rounded(string $rounded): static
    {
        $this->addClass('badge-pill');
        return $this;
    }
}
