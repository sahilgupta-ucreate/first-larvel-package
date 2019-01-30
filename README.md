# Contact Us Package

This package will provide you a contact us form which save all information in databasetable. 

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

## License
[MIT](https://choosealicense.com/licenses/mit/)