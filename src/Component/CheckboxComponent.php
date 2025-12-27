<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\HtmlComponent;
use Lagdo\UiBuilder\Component\CheckboxComponent as BaseComponent;
use Lagdo\UiBuilder\Component\InputGroupComponent;

class CheckboxComponent extends BaseComponent
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
     * @param HtmlComponent $parent
     *
     * @return void
     */
    public function onBuild(HtmlComponent $parent): void
    {
        if (is_a($parent, InputGroupComponent::class)) {
            $this->addWrapper('div',
                ['class' => 'input-group-text', 'style' => 'background-color:white;']);
            $this->addWrapper('div', ['class' => 'input-group-append']);
        }
    }
}
