<?php

namespace Lagdo\UiBuilder\Bootstrap4\Builder;

use Lagdo\UiBuilder\Bootstrap4\Component;

trait FormBuilderTrait
{
    /**
     * @return void
     */
    protected function initFormBuilder(): void
    {
        $this->formComponentClass = Component\FormComponent::class;
        $this->labelComponentClass = Component\LabelComponent::class;
        $this->inputComponentClass = Component\InputComponent::class;
        $this->textareaComponentClass = Component\TextareaComponent::class;
        $this->checkboxComponentClass = Component\CheckboxComponent::class;
        $this->checkboxGroupComponentClass = Component\CheckboxGroupComponent::class;
        $this->switchComponentClass = Component\SwitchComponent::class;
        $this->radioComponentClass = Component\RadioComponent::class;
        $this->radioGroupComponentClass = Component\RadioGroupComponent::class;
        $this->selectComponentClass = Component\SelectComponent::class;
        $this->selectOptionComponentClass = Component\SelectOptionComponent::class;
        $this->inputGroupComponentClass = Component\InputGroupComponent::class;
    }
}
