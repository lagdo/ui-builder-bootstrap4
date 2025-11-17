<?php

namespace Lagdo\UiBuilder\Bootstrap4;

use Lagdo\UiBuilder\AbstractBuilder;
use Lagdo\UiBuilder\Bootstrap4\Element\LabelElement;
use Lagdo\UiBuilder\Bootstrap4\Element\TableElement;
use Lagdo\UiBuilder\Element\LabelInterface;
use Lagdo\UiBuilder\Element\RowInterface;
use Lagdo\UiBuilder\Element\TableInterface;

class Builder extends AbstractBuilder
{
    use Builder\LayoutTrait;
    use Builder\ButtonTrait;
    use Builder\PanelTrait;
    use Builder\FormTrait;
    use Builder\MenuTrait;
    use Builder\TabTrait;
    use Builder\PaginationTrait;

    /**
     * @inheritDoc
     */
    public function formRow(...$arguments): RowInterface
    {
        $element = $this->row(...$arguments);
        $element->addBaseClass('form-group');
        return $element;
    }

    /**
     * @inheritDoc
     */
    public function label(...$arguments): LabelInterface
    {
        return $this->createElementOfClass(LabelElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function table(...$arguments): TableInterface
    {
        return $this->createElementOfClass(TableElement::class, $arguments);
    }
}
