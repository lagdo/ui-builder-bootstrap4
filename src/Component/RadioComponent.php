<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;
use Lagdo\UiBuilder\Component\InputGroupComponent;
use Lagdo\UiBuilder\Component\RadioGroupComponent;

class RadioComponent extends BaseComponent
{
    use Mixin\ValidationTrait;

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
            $this->wrapElement($this->newElement('div', [
                'class' => 'input-group-text bg-white',
                'style' => 'padding-left: 32px; padding-right: 7px;',
            ]));
            $this->wrapElement($this->newElement('div', ['class' => 'input-group-append']));
            return;
        }

        $wrapperClass = is_a($parent, RadioGroupComponent::class) && $parent->isVertical() ?
            'form-check' : 'form-check form-check-inline';
        $this->wrapElement($this->newElement('div', ['class' =>  $wrapperClass]));
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $label = $this->newElement('label', $attributes);
        $label->addClass('form-label')->addChild($html);
        $this->appendSibling($label);
    }
}
