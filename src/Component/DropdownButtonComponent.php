<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\DropdownButtonComponent as BaseComponent;

use function count;

class DropdownButtonComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('btn')
            ->setAttributes([
                'data-toggle' => 'dropdown',
                'aria-expanded' => 'false',
            ]);
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (count($this->children()) === 0) {
            $this->addBaseClass('dropdown-toggle');
        }

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
    }
}
