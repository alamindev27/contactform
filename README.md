This is a lararavel contact form package. If you Install this package you will get a ready contact form with functional, Good Looking Design, auto mail send to admin via SMTP server.

---

## Features

- Send Mail via SMTP server
- Good looking design with Tailwind css
- Form Validation
- Configurable via `config/contactform.php`
- Supports Laravel 10, 11, 12

---


## Installation

Install via Packagist:
<a href='https://packagist.org/packages/alamindev27/contactform'>https://packagist.org/packages/alamindev27/contactform</a>

<i>OR</i>

Require the package using Composer:

```bash
composer require alamindev27/contactform
```

Then run:
```bash
composer update
```

## Publish Config (Optional)

You can publish the config file to customize Admin Email:

```bash
php artisan vendor:publish --provider="Alamindev27\ContactForm\ContactFormServiceProvider" --tag=contactform-config

```


This will create config/contactform.php.
You can change default Admin Email which called from .env file.


## Requirements

PHP 8.1+

Laravel 10, 11, 12

## Contributing
Feel free to fork this repository and submit pull requests.
Please follow PSR-12 coding standards and write tests for new features.

## License
MIT License © <a href='https://alamindev27.com'>MD Al-Amin</a>
