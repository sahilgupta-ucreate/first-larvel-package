# Contact Us Package

This package will provide you a contact us form which save all information in database table. 

## Installation

Install using following command.

```bash
composer require sahil/first
```

## Configurations
Then open ``` config/app/php ``` and add following class to providers array.


```php
Sahil\First\FirstServiceProvider::class,
```

After that, Install migration using following commands in terminal.

```bash
php artisan migrate
```

## Usage
Try following path for contact us form.
 
``` www.yourdomain.com/pkg/contact ```

For getting list of all message. Use following in your controller

```php
use Sahil\First\Models\ContactForm;
```

After that, Try following code in your function.

```php
$msgList = new ContactHelper();
```

## License
[MIT](https://choosealicense.com/licenses/mit/)