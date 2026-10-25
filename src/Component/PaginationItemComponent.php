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
        $this->addBaseClass('page-item');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->element()->addClass('active');
        }
        $this->element()->addClass($this->prop('enabled', true) ? 'enabled' : 'disabled');

        $this->wrapChildren($this->url()->setClass('page-link'));
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        $this->element()->setAttribute('data-page', "$number");
        return $this;
    }
}
