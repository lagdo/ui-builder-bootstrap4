<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\FormFieldComponent as BaseComponent;
use Lagdo\HtmlBuilder\Element\Html;

class FormFieldComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function setLabel(Html $html, array $attributes): void
    {
    }
}
