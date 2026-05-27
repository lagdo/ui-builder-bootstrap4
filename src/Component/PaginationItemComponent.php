<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('page-link');
        $this->addWrapper($this->newElement('li', ['class' => 'page-item']));
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $wrapper = $this->wrapper(0);
        if ($this->prop('active', false)) {
            $wrapper->addClass('active');
        }
        $wrapper->addClass($this->prop('enabled', true) ? 'enabled' : 'disabled');
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        $this->wrapper(0)->setAttribute('data-page', $number);
        return $this;
    }
}
