[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lagdo/ui-builder-bootstrap4/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/lagdo/ui-builder-bootstrap4/?branch=main)
[![StyleCI](https://styleci.io/repos/449480114/shield?branch=main)](https://styleci.io/repos/449480114)

[![Latest Stable Version](https://poser.pugx.org/lagdo/ui-builder-bootstrap4/v/stable)](https://packagist.org/packages/lagdo/ui-builder-bootstrap4)
[![Total Downloads](https://poser.pugx.org/lagdo/ui-builder-bootstrap4/downloads)](https://packagist.org/packages/lagdo/ui-builder-bootstrap4)
[![License](https://poser.pugx.org/lagdo/ui-builder-bootstrap4/license)](https://packagist.org/packages/lagdo/ui-builder-bootstrap4)

Bootstrap 4 extension for the HTML UI builder
=============================================

This package extends the [HTML UI builder](https://github.com/lagdo/ui-builder) and implements functions to create UI components for Bootstrap 4.

### Usage

See the [HTML UI builder](https://github.com/lagdo/ui-builder) documentation.

Depending on the version of Bootstrap, a different class instance must provided where the `Lagdo\UiBuilder\BuilderInterface` is required.

For example, let say this `View` class is used to create HTML code.
```php
use Lagdo\UiBuilder\BuilderInterface;

class View
{
    /**
     * @var BuilderInterface
     */
    protected $uiBuilder;

    /**
     * @param BuilderInterface
     */
    public function __construct(BuilderInterface $uiBuilder)
    {
        $this->uiBuilder = $uiBuilder;
    }
}
```

With the following example, the `View` class will generate HTML code for Bootstrap 4.
```php
use Lagdo\UiBuilder\Bootstrap4\Builder;

$view = new View(new Builder());
```

### Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### License

Distributed under the MIT License. See `LICENSE.txt` for more information.
