<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\InputGroupComponent;
use Lagdo\UiBuilder\Component\LabelComponent as BaseComponent;

use function is_a;

class LabelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->inForm()) {
            $this->addBaseClass('col-form-label');
        }

        // A label in an input group must be wrapped into a span with class "input-group-prepend".
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->addBaseClass('input-group-text');
            $this->addWrapper($this->newElement('div', ['class' => 'input-group-prepend']));
        }
    }
}
