<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\CheckboxComponent as BaseComponent;
use Lagdo\UiBuilder\Component\CheckboxGroupComponent;
use Lagdo\UiBuilder\Component\InputGroupComponent;
use Lagdo\HtmlBuilder\HtmlElement;
use Lagdo\HtmlBuilder\Element\Text;

use function is_a;

class CheckboxComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('form-check-input');
        $this->element()->setAttribute('type', 'checkbox');
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

        $wrapperClass = is_a($parent, CheckboxGroupComponent::class) &&
            ($parent->prop('horizontal', false)) ?
                'form-check form-check-inline' : 'form-check';
        $this->addWrapper($this->newElement('div', ['class' =>  $wrapperClass]));
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addClass('form-check-label')->addChild($text);
        $this->appendSibling($label);
    }
}
