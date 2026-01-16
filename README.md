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
<a href='https://packagist.org/packages/alamindev27/contactform' target="_blank">Click Here</a>

<i>OR</i>

Require the package using Composer:

```bash
composer require alamindev27/contactform
```

## Publish Config

You can publish the config file to customize Admin Email:

```bash
php artisan vendor:publish --provider="Alamindev27\ContactForm\ContactFormServiceProvider" --tag=contactform-config

```

This will create `config/contactform.php`.
You can change default Admin Email which called from `.env` file.

## Migrate database Schema

```bash
php artisan migrate
```

You can publish the config file to customize Admin Email:

```bash
php artisan vendor:publish --provider="Alamindev27\ContactForm\ContactFormServiceProvider" --tag=contactform-config

```

You have to add a Variable in `.env file`:

```bash
ADMIN_EMAIL='alamindev27@gmail.com' # It is admin receiver email
```

# Looking to send emails in production? Check out your Email SMTP product!

MAIL_MAILER=smtp 
<br>
MAIL_HOST=sandbox.smtp.mailtrap.io 
<br>
MAIL_PORT=2525 
<br>
MAIL_USERNAME=4a*********b 
<br>
MAIL_PASSWORD=1**********0d3


Then run:
```bash
php artisan optimize
```

## You can use on you blade 
```bash
{{ url('/contact') }}
```

## Finally Testing 
```bash
http://127.0.0.1:8000/contact
```


## Requirements

PHP 8.1+

Laravel 10, 11, 12

## Contributing
Feel free to fork this repository and submit pull requests.
Please follow PSR-12 coding standards and write tests for new features.

## License
MIT License © <a href='https://alamindev27.com'>MD Al-Amin</a>
