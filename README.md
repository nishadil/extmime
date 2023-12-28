# Nishadil\Extmime
The "Nishadil\Extmime" PHP package offers a convenient solution for developers seeking to effortlessly convert between file MIME types and extensions within their projects. By leveraging this package, developers can seamlessly map MIME types to file extensions and vice versa, simplifying file handling tasks.


## How to install
To integrate "Nishadil\Extmime" into your project, simply clone this git repo or use [Composer](https://getcomposer.org/) with the following command:
```bash
composer require nishadil/extmime
```

## How to use


### Get mime type from file extension


```php

    <?php
    
    use Nishadil\Extmime;

    $extmime = new Extmime;
    $result = $extmime->getExtension("image/jpeg");

    echo $result;
    ?>

```

Output :

```text
    .jpg
```


### Get extension from file mime type


```php

    <?php
    
    use Nishadil\Extmime;

    $extmime = new Extmime;
    $result = $extmime->getMimeType(".jpg");

    echo $result;
    ?>

```

Output :

```text
    .image/jpeg
```