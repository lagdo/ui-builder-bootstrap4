<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Html\TabNavItemElement as BaseElement;

class TabNavItemElement extends BaseElement
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
        $this->setAttributes(['data-toggle' => 'tab', 'role' => 'tab']);
        $this->addBaseClass('nav-link');
        $this->addWrapper('li', ['class' => 'nav-item', 'role' => 'presentation']);
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->setAttribute('href', "#$target");
        return $this;
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        $active && $this->addClass('active');
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        !$enabled && $this->addClass('disabled');
        return $this;
    }
}
