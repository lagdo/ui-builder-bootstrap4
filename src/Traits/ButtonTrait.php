<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\Builder as AbstractBuilder;

trait ButtonTrait
{
    /**
     * @var array
     */
    protected $mainStyles = [
        AbstractBuilder::BTN_PRIMARY => 'primary',
        AbstractBuilder::BTN_SECONDARY => 'secondary',
        AbstractBuilder::BTN_SUCCESS => 'success',
        AbstractBuilder::BTN_INFO => 'info',
        AbstractBuilder::BTN_WARNING => 'warning',
        AbstractBuilder::BTN_DANGER => 'danger',
    ];

    /**
     * @var array
     */
    protected $sizeStyles = [
        AbstractBuilder::BTN_LARGE => 'lg',
        AbstractBuilder::BTN_SMALL => 'sm',
    ];

    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function buttonGroup(bool $fullWidth, ...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass($fullWidth ? 'btn-group d-flex' : 'btn-group');
        $this->builder->setAttribute('role', 'group');
        $this->builder->scope()->isButtonGroup = true;
        return $this;
    }

    /**
     * @param integer $flags
     *
     * @return string
     */
    private function mainClass(int $flags): string
    {
        foreach ($this->mainStyles as $mask => $value) {
            if ($flags & $mask) {
                return ($flags & AbstractBuilder::BTN_OUTLINE) ? "btn btn-outline-$value" : "btn btn-$value";
            }
        }
        // The default style is "secondary"
        return ($flags & AbstractBuilder::BTN_OUTLINE) ? 'btn btn-outline-secondary' : 'btn btn-secondary';
    }

    /**
     * @param integer $flags
     * @param boolean $isInButtonGroup
     *
     * @return string
     */
    private function buttonClass(int $flags, bool $isInButtonGroup): string
    {
        $btnClass = $this->mainClass($flags);
        foreach ($this->sizeStyles as $mask => $value) {
            if ($flags & $mask) {
                $btnClass .= " btn-$value";
            }
        }
        if (($flags & AbstractBuilder::BTN_FULL_WIDTH) && !$isInButtonGroup) {
            $btnClass .= ' w-100';
        }
        return $btnClass;
    }

    /**
     * @inheritDoc
     */
    public function button(int $flags = 0, ...$arguments): self
    {
        // A button in an input group must be wrapped into a div with class "input-group-btn".
        // Check the parent scope.
        $scope = $this->builder->scope();
        if($this->scope !== null && $this->scope->isInputGroup)
        {
            $this->builder->createWrapper('div', ['class' => 'input-group-append']);
        }
        $this->builder->createScope('button', $arguments);
        $this->builder->prependClass($this->buttonClass($flags, $scope?->isButtonGroup ?? false));
        $this->builder->setAttribute('type', 'button');
        return $this;
    }
}
