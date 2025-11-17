<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Element\TabNavElement;
use Lagdo\UiBuilder\Bootstrap4\Element\TabNavItemElement;
use Lagdo\UiBuilder\Bootstrap4\Element\TabContentElement;
use Lagdo\UiBuilder\Bootstrap4\Element\TabContentItemElement;
use Lagdo\UiBuilder\Element\TabNavInterface;
use Lagdo\UiBuilder\Element\TabNavItemInterface;
use Lagdo\UiBuilder\Element\TabContentInterface;
use Lagdo\UiBuilder\Element\TabContentItemInterface;

trait TabTrait
{
    /**
     * @inheritDoc
     */
    public function tabNav(...$arguments): TabNavInterface
    {
        return $this->createElementOfClass(TabNavElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabNavItem(...$arguments): TabNavItemInterface
    {
        return $this->createElementOfClass(TabNavItemElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabContent(...$arguments): TabContentInterface
    {
        return $this->createElementOfClass(TabContentElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(...$arguments): TabContentItemInterface
    {
        return $this->createElementOfClass(TabContentItemElement::class, $arguments);
    }
}
