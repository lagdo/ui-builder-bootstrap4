<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\SwitchComponent as BaseComponent;
use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\HtmlBuilder\HtmlElement;

use function is_a;

class SwitchComponent extends BaseComponent
{
    /**
     * @var HtmlElement|null
     */
    private HtmlElement|null $label = null;

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $this->addBaseClass('custom-control-input');
        $this->element()->setAttribute('type', 'checkbox');
        $this->wrapElement($this->newElement('div', [
            'class' => 'custom-control custom-switch',
        ]));

        // The switch toggle is not displayed without a label.
        $label = $this->label ?? $this->newElement('label')
            ->addChild(new Html('&nbsp;'));
        // The switch toggle is not enabled without a for attribute.
        if ($this->element()->hasAttribute('id')) {
            $label->setAttribute('for', $this->element()->getAttribute('id'));
        }
        $label->addClass('custom-control-label');
        $this->appendSibling($label);

        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->wrapElement($this->newElement('div', [
                'class' => 'input-group-text bg-white',
                'style' => 'padding: 3px 0 0 9px;',
            ]));
        }
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
        $this->label = $this->newElement('label', $attributes)
            ->addChild($html);
    }
}
