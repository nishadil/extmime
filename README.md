# Nishadil\Extmime
PHP package for converting file MIME Type to extension and vice versa.



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