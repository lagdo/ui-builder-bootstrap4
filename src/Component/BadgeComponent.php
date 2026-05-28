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
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $visual = $this->prop('visual', null);
        $visual = $visual?->value ?? 'light';
        $this->element()->addClass("badge-$visual");
    }
}
