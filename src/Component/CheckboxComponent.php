<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\CheckboxComponent as BaseComponent;
use Lagdo\UiBuilder\Component\Base\InputGroupComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

use function is_a;

class CheckboxComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('form-check-input');
        $this->element()->setAttribute('type', 'checkbox');
    }

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        if (is_a($parent, InputGroupComponent::class)) {
            $this->addWrapper('div', [
                'class' => 'input-group-text',
                'style' => 'background-color:white;',
            ]);
            $this->addWrapper('div', ['class' => 'input-group-append']);
        }
    }
}
