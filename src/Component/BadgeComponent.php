<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\BadgeComponent as BaseComponent;

class BadgeComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('badge');
    }

    /**
     * @param string $type
     *
     * @return static
     */
    public function type(string $type): static
    {
        $this->element()->addClass("badge-$type");
        return $this;
    }

    /**
     * @param string $rounded
     *
     * @return static
     */
    public function rounded(string $rounded): static
    {
        $this->element()->addClass('badge-pill');
        return $this;
    }
}
