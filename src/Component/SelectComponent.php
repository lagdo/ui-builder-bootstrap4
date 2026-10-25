<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\SelectComponent as BaseComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Html;

class SelectComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('custom-select');
        if ($this->prop('shrink', false)) {
            $this->addClass('w-auto')->setStyle('flex: 0 1 auto;');
        }
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Html $html): void
    {
        $label->addClass('form-label')->addChild($html);
        $this->prependSibling($label);
    }
}
