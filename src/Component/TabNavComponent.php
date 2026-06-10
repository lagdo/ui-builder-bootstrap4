<?php

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
        $this->element()->addBaseClass('nav');
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
        $this->element()->addBaseClass($styleClass);

        if ($this->parentProp(1, 'vertical', false)) {
            $this->element()->addClass('flex-column');
        }
    }

    /**
     * @param bool $justified
     *
     * @return static
     */
    public function fill(bool $justified = false): static
    {
        $this->element()->addClass($justified ? 'nav-fill' : 'nav-justified');
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
