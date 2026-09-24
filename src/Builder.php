<?php

namespace Lagdo\UiBuilder\Bootstrap4;

use Lagdo\UiBuilder\AbstractBuilder;

class Builder extends AbstractBuilder
{
    /**
     * @return void
     */
    protected function initBuilder(): void
    {
        // Button components
        $this->buttonComponentClass = Component\ButtonComponent::class;
        $this->buttonGroupComponentClass = Component\ButtonGroupComponent::class;
        // Card components
        $this->cardComponentClass = Component\CardComponent::class;
        $this->cardImageComponentClass = Component\CardImageComponent::class;
        $this->cardHeaderComponentClass = Component\CardHeaderComponent::class;
        $this->cardBodyComponentClass = Component\CardBodyComponent::class;
        $this->cardFooterComponentClass = Component\CardFooterComponent::class;
        // Dropdown components
        $this->dropdownComponentClass = Component\DropdownComponent::class;
        $this->dropdownButtonComponentClass = Component\DropdownButtonComponent::class;
        $this->dropdownMenuComponentClass = Component\DropdownMenuComponent::class;
        $this->dropdownMenuItemComponentClass = Component\DropdownMenuItemComponent::class;
        // Form components
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
        // Menu components
        $this->menuComponentClass = Component\MenuComponent::class;
        $this->menuItemComponentClass = Component\MenuItemComponent::class;
        $this->breadcrumbComponentClass = Component\BreadcrumbComponent::class;
        $this->breadcrumbItemComponentClass = Component\BreadcrumbItemComponent::class;
        // Pagination components
        $this->paginationComponentClass = Component\PaginationComponent::class;
        $this->paginationItemComponentClass = Component\PaginationItemComponent::class;
        // Tab components
        $this->tabsComponentClass = Component\TabsComponent::class;
        $this->tabNavComponentClass = Component\TabNavComponent::class;
        $this->tabNavItemComponentClass = Component\TabNavItemComponent::class;
        $this->tabContentComponentClass = Component\TabContentComponent::class;
        $this->tabContentItemComponentClass = Component\TabContentItemComponent::class;
        // Table components
        $this->tableComponentClass = Component\TableComponent::class;
        $this->tableHeadComponentClass = Component\TableHeadComponent::class;
        $this->tableBodyComponentClass = Component\TableBodyComponent::class;
        $this->tableFootComponentClass = Component\TableFootComponent::class;
        $this->tableRowComponentClass = Component\TableRowComponent::class;
        $this->tableHeadCellComponentClass = Component\TableHeadCellComponent::class;
        $this->tableDataCellComponentClass = Component\TableDataCellComponent::class;
        // Layout components
        // $this->rowComponentClass = Component\RowComponent::class;
        // $this->colComponentClass = Component\ColComponent::class;
        $this->alertComponentClass = Component\AlertComponent::class;
        $this->badgeComponentClass = Component\BadgeComponent::class;
    }
}
