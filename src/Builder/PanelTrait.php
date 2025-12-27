<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component\PanelElement;
use Lagdo\UiBuilder\Bootstrap4\Component\PanelBodyElement;
use Lagdo\UiBuilder\Bootstrap4\Component\PanelFooterElement;
use Lagdo\UiBuilder\Bootstrap4\Component\PanelHeaderElement;
use Lagdo\UiBuilder\Component\PanelInterface;
use Lagdo\UiBuilder\Component\PanelBodyInterface;
use Lagdo\UiBuilder\Component\PanelFooterInterface;
use Lagdo\UiBuilder\Component\PanelHeaderInterface;

trait PanelTrait
{
    /**
     * @inheritDoc
     */
    public function panel(...$arguments): PanelInterface
    {
        return $this->createElementOfClass(PanelElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelHeader(...$arguments): PanelHeaderInterface
    {
        return $this->createElementOfClass(PanelHeaderElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelBody(...$arguments): PanelBodyInterface
    {
        return $this->createElementOfClass(PanelBodyElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelFooter(...$arguments): PanelFooterInterface
    {
        return $this->createElementOfClass(PanelFooterElement::class, $arguments);
    }
}
