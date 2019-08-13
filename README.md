# Codeigniter with Yii2

1, installation
------------

The preferred way to install this extension is via [composer] (http://getcomposer.org/download/).

Excuting an order

```bash
composer require vishnuprasadpg/codeigniter-with-yii2
```
Or add

```
"vishnuprasadpg/codeigniter-with-yii2": "~1.0.0"
```

## File Configuration

After installation, find the file `index.php`

```php
require_once BASEPATH.'core/CodeIgniter.php';
```

Add a line before

```php
require ROOTPATH . 'vendor/autoload.php';
```
