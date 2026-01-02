<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\InputGroupComponent;
use Lagdo\UiBuilder\Component\Base\LabelComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

use function is_a;

class LabelComponent extends BaseComponent
{
    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        // A label in an input group must be wrapped into a span with class "input-group-prepend".
        if (is_a($parent, InputGroupComponent::class)) {
            $this->element()->addBaseClass('input-group-text');
            $this->addWrapper('div', ['class' => 'input-group-prepend']);
        }
    }
}
