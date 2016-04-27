<?php
/**
 * Yii bootstrap file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

require(__DIR__ . '/BaseYii.php');
require_once(FCPATH . APPPATH . 'config/database.php');

/**
 * Yii is a helper class serving common framework functionalities.
 *
 * It extends from [[\yii\BaseYii]] which provides the actual implementation.
 * By writing your own Yii class, you can customize some functionalities of [[\yii\BaseYii]].
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Yii extends \yii\BaseYii
{
}

spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = require(__DIR__ . '/classes.php');
Yii::$container = new yii\di\Container();

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

$config = [
    'id' => 'codeigniter-with-yii2',
    'basePath' => BASEPATH,
    'components' => [],
];

foreach ($db as $dbKey => $dbConfig) {
    if ($active_group == $dbKey) {
        $dbName = 'db';
    } else {
        $dbName = $dbKey;
    }
    $config['components'][$dbName] = [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=' . $dbConfig['hostname'] . ';dbname=' . $dbConfig['database'],
        'username' => $dbConfig['username'],
        'password' => $dbConfig['password'],
        'charset' => $dbConfig['char_set'],
        'tablePrefix' => $dbConfig['dbprefix'],
    ];
}

$application = new yii\web\Application($config);
//$application->run();