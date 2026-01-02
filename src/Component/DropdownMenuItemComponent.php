<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\DropdownMenuItemComponent as BaseComponent;

class DropdownMenuItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'a';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('dropdown-item');
        $this->element()->setAttribute('href', '#');
    }
}
