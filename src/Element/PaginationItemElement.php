<?php

namespace Lagdo\UiBuilder\Bootstrap4\Element;

use Lagdo\UiBuilder\Element\Html\PaginationItemElement as BaseElement;

class PaginationItemElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->prependClass('page-link');
        $this->addWrapper('li', ['class' => 'page-item']);
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active): static
    {
        $active && $this->setWrapperClass(0, 'active');
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        $this->setWrapperClass(0, $enabled ? 'enabled' : 'disabled');
        return $this;
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        $this->setWrapperAttribute(0, 'data-page', $number);
        $this->addText($number);
        return $this;
    }
}
