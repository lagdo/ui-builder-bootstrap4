<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
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
        $this->element()->setAttributes(['data-toggle' => 'tab', 'role' => 'tab']);
        $this->element()->addBaseClass('nav-link');
        $this->addWrapper('li', ['class' => 'nav-item', 'role' => 'presentation']);
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->element()->setAttribute('href', "#$target");
        return $this;
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        if ($active) {
            $this->element()->addClass('active');
        }
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        if (!$enabled) {
            $this->element()->addClass('disabled');
        }
        return $this;
    }
}
