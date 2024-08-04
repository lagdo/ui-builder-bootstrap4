<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait ButtonTrait
{
    /**
     * @inheritDoc
     */
    public function buttonGroup(bool $fullWidth, ...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass($fullWidth ? 'btn-group d-flex' : 'btn-group');
        $this->builder->setAttribute('role', 'group');
        $this->builder->scope()->isButtonGroup = true;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function button(...$arguments): BuilderInterface
    {
        // A button in an input group must be wrapped into a div with class "input-group-btn".
        // Check the parent scope.
        $scope = $this->builder->scope();
        if($scope !== null && $scope->isInputGroup)
        {
            $this->builder->createWrapper('div', ['class' => 'input-group-append']);
        }
        $this->builder->createScope('button', $arguments);
        $this->builder->prependClass('btn');
        $this->builder->setAttribute('type', 'button');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnOutline(): BuilderInterface
    {
        $this->builder->scope()->btnOutline = true;
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnFullWidth(): BuilderInterface
    {
        if($this->builder->scope()?->isButtonGroup ?? false)
        {
            $this->builder->appendClass('w-100');
        }
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnLarge(): BuilderInterface
    {
        $this->builder->appendClass('btn-lg');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnSmall(): BuilderInterface
    {
        $this->builder->appendClass('btn-sm');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnPrimary(): BuilderInterface
    {
        $this->builder->appendClass($this->builder->scope()->btnOutline ? 'btn-outline-primary' : 'btn-primary');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnSecondary(): BuilderInterface
    {
        $this->builder->appendClass($this->builder->scope()->btnOutline ? 'btn-outline-secondary' : 'btn-secondary');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnSuccess(): BuilderInterface
    {
        $this->builder->appendClass($this->builder->scope()->btnOutline ? 'btn-outline-success' : 'btn-success');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnInfo(): BuilderInterface
    {
        $this->builder->appendClass($this->builder->scope()->btnOutline ? 'btn-outline-info' : 'btn-info');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnWarning(): BuilderInterface
    {
        $this->builder->appendClass($this->builder->scope()->btnOutline ? 'btn-outline-warning' : 'btn-warning');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnDanger(): BuilderInterface
    {
        $this->builder->appendClass($this->builder->scope()->btnOutline ? 'btn-outline-danger' : 'btn-danger');
        return $this;
    }
}
