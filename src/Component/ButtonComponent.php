<?php

namespace Lagdo\UiBuilder\Bootstrap4\Component;

use Lagdo\UiBuilder\Component\Base\HtmlComponent;
use Lagdo\UiBuilder\Component\ButtonComponent as BaseComponent;

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
        $this->addBaseClass('btn');
        $this->setAttribute('type', 'button');
    }

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    public function onBuild(HtmlComponent $parent): void
    {
        if ($this->fullWidth && !is_a($parent, ButtonGroupComponent::class)) {
            $this->addClass('w-100');
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
        $this-addHtml('<i class="fa fa-' . $icon . '"></i>');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addCaret(): static
    {
        // Nothing to do.
        return $this;
    }

    /**
     * @return static
     */
    public function large(): static
    {
        $this->addClass('btn-lg');
        return $this;
    }

    /**
     * @return static
     */
    public function small(): static
    {
        $this->addClass('btn-sm');
        return $this;
    }

    /**
     * @return static
     */
    public function primary(): static
    {
        $this->addClass($this->outline ? 'btn-outline-primary' : 'btn-primary');
        return $this;
    }

    /**
     * @return static
     */
    public function secondary(): static
    {
        $this->addClass($this->outline ? 'btn-outline-secondary' : 'btn-secondary');
        return $this;
    }

    /**
     * @return static
     */
    public function success(): static
    {
        $this->addClass($this->outline ? 'btn-outline-success' : 'btn-success');
        return $this;
    }

    /**
     * @return static
     */
    public function info(): static
    {
        $this->addClass($this->outline ? 'btn-outline-info' : 'btn-info');
        return $this;
    }

    /**
     * @return static
     */
    public function warning(): static
    {
        $this->addClass($this->outline ? 'btn-outline-warning' : 'btn-warning');
        return $this;
    }

    /**
     * @return static
     */
    public function danger(): static
    {
        $this->addClass($this->outline ? 'btn-outline-danger' : 'btn-danger');
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
