<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\ButtonComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

use function is_a;

class ButtonComponent extends BaseComponent
{
    /**
     * @var bool
     */
    private bool $fullWidth = false;

    /**
     * @var bool
     */
    private bool $outline = false;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn');
        $this->element()->setAttribute('type', 'button');
    }

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        if ($this->fullWidth && !is_a($parent, ButtonGroupComponent::class)) {
            $this->element()->addClass('w-100');
        }
        // A button in an input group must be wrapped into a div with class "input-group-append".
        if (is_a($parent, InputGroupComponent::class)) {
            $this->addWrapper('div', ['class' => 'input-group-append']);
        }
    }

    /**
     * @inheritDoc
     */
    public function addIcon(string $icon): static
    {
        if ($icon === 'remove') {
            $icon = 'x';
        } elseif ($icon === 'edit') {
            $icon = 'pencil';
        } elseif ($icon === 'ok') {
            $icon = 'check';
        }
        $this->addHtml('<i class="fa fa-' . $icon . '"></i>');
        return $this;
    }

    /**
     * @return static
     */
    public function large(): static
    {
        $this->element()->addClass('btn-lg');
        return $this;
    }

    /**
     * @return static
     */
    public function small(): static
    {
        $this->element()->addClass('btn-sm');
        return $this;
    }

    /**
     * @return static
     */
    public function primary(): static
    {
        $this->element()->addClass($this->outline ? 'btn-outline-primary' : 'btn-primary');
        return $this;
    }

    /**
     * @return static
     */
    public function secondary(): static
    {
        $this->element()->addClass($this->outline ? 'btn-outline-secondary' : 'btn-secondary');
        return $this;
    }

    /**
     * @return static
     */
    public function success(): static
    {
        $this->element()->addClass($this->outline ? 'btn-outline-success' : 'btn-success');
        return $this;
    }

    /**
     * @return static
     */
    public function info(): static
    {
        $this->element()->addClass($this->outline ? 'btn-outline-info' : 'btn-info');
        return $this;
    }

    /**
     * @return static
     */
    public function warning(): static
    {
        $this->element()->addClass($this->outline ? 'btn-outline-warning' : 'btn-warning');
        return $this;
    }

    /**
     * @return static
     */
    public function danger(): static
    {
        $this->element()->addClass($this->outline ? 'btn-outline-danger' : 'btn-danger');
        return $this;
    }

    /**
     * @return static
     */
    public function outline(): static
    {
        $this->outline = true;
        return $this;
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->fullWidth = true;
        return $this;
    }
}
