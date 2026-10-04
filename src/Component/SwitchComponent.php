<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\SwitchComponent as BaseComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Html;

class SwitchComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('custom-control-input');
        $this->element()->setAttribute('type', 'checkbox');
        $this->addWrapper($this->newElement('div', ['class' => 'custom-control custom-switch']));
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Html $html): void
    {
        $label->addClass('custom-control-label')->addChild($html);
        $this->appendSibling($label);
    }
}
