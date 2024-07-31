<?php

namespace Lagdo\UiBuilder\Bootstrap4\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait TabTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function tabNav(string $id = '', ...$arguments): BuilderInterface
    {
        $this->builder->createScope('ul', [$id, ...$arguments]);
        $this->builder->prependClass('nav nav-pills');
        if (($id)) {
            $this->builder->setAttribute('id', $id);
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabNavItem(string $target, bool $active = false, ...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'nav-item', 'role' => 'presentation']);
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass($active ? 'nav-link active' : 'nav-link');
        $this->builder->setAttributes(['data-toggle' => 'tab', 'role' => 'tab', 'href' => "#$target"]);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContent(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('tab-content');
        $this->builder->setAttribute('style', 'margin-top:10px;');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(string $id, bool $active = false, ...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass($active ? 'tab-pane fade show active' : 'tab-pane fade');
        $this->builder->setAttribute('id', $id);
        return $this;
    }
}
