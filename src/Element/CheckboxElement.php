<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Builder\Html\Element;
use Lagdo\UiBuilder\Element\Html\CheckboxElement as BaseElement;
use Lagdo\UiBuilder\Element\Html\InputGroupElement;

class CheckboxElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('form-check-input');
        $this->setAttribute('type', 'checkbox');
    }

    /**
     * @param Element $parent
     *
     * @return void
     */
    public function onBuild(Element $parent): void
    {
        if (is_a($parent, InputGroupElement::class)) {
            $this->addWrapper('div',
                ['class' => 'input-group-text', 'style' => 'background-color:white;']);
            $this->addWrapper('div', ['class' => 'input-group-append']);
        }
    }
}
