<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('nav');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $styleClass = match($this->prop('style', '')) {
            'pills' => 'nav-pills',
            // 'lines' => '', // Not implemented
            default => 'nav-tabs',
        };
        $this->addBaseClass($styleClass);

        if ($this->parentProp(1, 'vertical', false)) {
            $this->element()->addClass('flex-column');
        }
    }

    /**
     * @param bool $filled
     *
     * @return static
     */
    public function fill(bool $filled = true): static
    {
        $this->element()->addClass($filled ? 'nav-fill' : 'nav-justified');
        return $this;
    }

    /**
     * @param string $justify
     *
     * @return static
     */
    public function justify(string $justify): static
    {
        $this->element()->addClass("justify-content-$justify");
        return $this;
    }
}
