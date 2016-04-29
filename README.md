# Codeigniter with Yii2

1、安装
------------

安装这个扩展的首选方式是通过 [composer](http://getcomposer.org/download/).

执行命令

```bash
composer require myweishanli/codeigniter-with-yii2
```
或添加

```
"myweishanli/codeigniter-with-yii2": "~1.0.0"
```

## 文件配置

安装好后找到文件`index.php`的

```php
require_once BASEPATH.'core/CodeIgniter.php';
```

之前添加一行

```php
require ROOTPATH . 'vendor/autoload.php';
```