<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\Base\ButtonComponent as BaseComponent;

use function is_a;

class ButtonComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn')
            ->setAttribute('type', 'button');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $visual = $this->prop('visual', null);
        $prefix = $visual === null || $this->prop('outline', false) ?
            'btn-outline-' : 'btn-';
        $this->element()->addClass($prefix . ($visual?->value ?? 'secondary'));

        switch($this->prop('size', null)) {
        case SizeEnum::LARGE:
            $this->element()->addClass('btn-lg');
            break;
        case SizeEnum::SMALL:
            $this->element()->addClass('btn-sm');
            break;
        default:
        }

        $parent = $this->parent();
        if ($this->prop('fullWidth', false) && !is_a($parent, ButtonGroupComponent::class)) {
            $this->element()->addClass('w-100');
        }

        // A button in an input group must be wrapped into a div with class "input-group-append".
        if (is_a($parent, InputGroupComponent::class)) {
            $this->addWrapper($this->newElement('div', ['class' => 'input-group-append']));
        }
    }
}
