<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Builder\Html\Element;
use Lagdo\UiBuilder\Element\Html\InputGroupElement;
use Lagdo\UiBuilder\Element\Html\TextElement as BaseElement;

use function is_a;

class TextElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->name = 'label';
    }

    /**
     * @param Element $parent
     *
     * @return void
     */
    public function onBuild(Element $parent): void
    {
        // A label in an input group must be wrapped into a span with class "input-group-prepend".
        if (is_a($parent, InputGroupElement::class)) {
            $this->addBaseClass('input-group-text');
            $this->addWrapper('div', ['class' => 'input-group-prepend']);
        }
    }
}
