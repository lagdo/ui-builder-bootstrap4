<?php

namespace Lagdo\UiBuilder\Bootstrap4\Tests;

use Lagdo\UiBuilder\Bootstrap4\Builder;
use PHPUnit\Framework\TestCase;

use function file_get_contents;
use function preg_replace;
use function str_replace;

final class FormTest extends TestCase
{
    /**
     * @var Builder
     */
    protected $ui;

    protected function setUp(): void
    {
        $this->ui = new Builder();
    }

    public function testSimpleForm()
    {
        // Form values
        $name = 'Sample name';
        $description = 'Sample description';

        $html = $this->ui->build(
            $this->ui->form(
                $this->ui->row(
                    $this->ui->col(
                        $this->ui->label($this->ui->text('Name'))
                            ->setFor('name')
                    )->unit(1, 3),
                    $this->ui->col(
                        $this->ui->input()
                            ->setType('text')
                            ->setName('name')
                            ->setPlaceholder('Name')
                            ->setValue($name)
                    )->unit(2, 3)
                ),
                $this->ui->row(
                    $this->ui->col(
                        $this->ui->label($this->ui->text('Description'))
                            ->setFor('description')
                    )->unit(1, 3),
                    $this->ui->col(
                        $this->ui->textarea($this->ui->text($description))
                            ->setRows('10')
                            ->setName('description')
                            ->setWrap('on')
                            ->setSpellcheck('false')
                    )->unit(2, 3)
                )
            )->setId('form-id')
        );

        // Remove new lines and pairs of spaces.
        $form = str_replace("\n", '', file_get_contents(__DIR__ . '/form.html'));
        $form = preg_replace('/\s{2}/', '', $form);

        $this->assertEquals($form, $html);
    }
}
