<?php

declare(strict_types=1);

namespace Lagdo\UiBuilder\Bootstrap4\Component\Mixin;

use Lagdo\HtmlBuilder\Element\Html;
use Lagdo\HtmlBuilder\HtmlElement;

trait ValidationTrait
{
    /**
     * @param string $name
     * @param array $arguments
     *
     * @return HtmlElement
     */
    abstract protected function newElement(string $name, array $arguments = []): HtmlElement;

    /**
     * @param HtmlElement $sibling
     *
     * @return static
     */
    abstract protected function appendSibling(HtmlElement $sibling): static;

    /**
     * @param bool $valid
     *
     * @return static
     */
    public function feedback(bool $valid): static
    {
        $this->addClass($valid ? 'is-valid' : 'is-invalid');
        $this->setProp('feedback', $valid);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function help(string $message): static
    {
        $class = match($this->prop('feedback')) {
            true => 'valid-feedback',
            false => 'invalid-feedback',
            default => 'form-text text-muted',
        };
        $element = $this->newElement('div', ['class' => $class])
            ->addChild(new Html($message));
        $this->appendSibling($element);
        return $this;
    }

    /**
     * @inheritDoc
     */
    // public function tooltip(string $message): static
    // {
    //     $this->addClass($valid ? 'is-valid' : 'is-invalid');
    //     if ($message !== '') {
    //         $element = $this->newElement('div', [
    //             'class' => $valid ? 'valid-tooltip' : 'invalid-tooltip',
    //         ]);
    //         $element->addChild(new Html($message));
    //         $this->appendSibling($element);
    //     }
    //     return $this;
    // }
}
