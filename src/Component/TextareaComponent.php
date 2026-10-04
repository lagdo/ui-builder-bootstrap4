<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Html;

class TextareaComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->inForm()) {
            $this->addBaseClass('form-control');
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
