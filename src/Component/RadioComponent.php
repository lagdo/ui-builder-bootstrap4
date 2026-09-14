<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;
use Lagdo\UiBuilder\Component\InputGroupComponent;
use Lagdo\UiBuilder\Component\RadioGroupComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class RadioComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('form-check-input');
        $this->element()->setAttribute('type', 'radio');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $parent = $this->parent();
        if (is_a($parent, InputGroupComponent::class)) {
            $this->addWrapper($this->newElement('div', [
                'class' => 'input-group-text',
                'style' => 'background-color:white;',
            ]));
            $this->addWrapper($this->newElement('div', ['class' => 'input-group-append']));
            return;
        }

        $wrapperClass = is_a($parent, RadioGroupComponent::class) &&
            ($parent->properties['horizontal'] ?? false) ?
                'form-check form-check-inline' : 'form-check';
        $this->addWrapper($this->newElement('div', ['class' =>  $wrapperClass]));
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addClass('form-label')->addChild($text);
        $this->appendSibling($label);
    }
}
