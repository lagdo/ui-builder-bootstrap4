<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('page-link');
        $this->wrapElement($this->newElement('li', ['class' => 'page-item']));
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $wrapper = $this->wrapper(1);
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
        $this->wrapper(1)->setAttribute('data-page', "$number");
        return $this;
    }
}
