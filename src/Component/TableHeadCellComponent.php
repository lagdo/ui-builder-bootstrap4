<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\TableHeadCellComponent as BaseComponent;

use function get_class;

class TableHeadCellComponent extends BaseComponent
{
    /**
     * @return string
     */
    private function getZone(): string
    {
        $parent = $this->parent()?->parent();
        return $parent === null ? '' : match(get_class($parent)) {
            TableHeadComponent::class => 'head',
            TableBodyComponent::class => 'body',
            TableFootComponent::class => 'foot',
            default => '',
        };
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (($zone = $this->getZone()) !== '') {
            $this->element()->setAttribute('scope', $zone === 'head' ? 'col' : 'row');
        }
    }
}
