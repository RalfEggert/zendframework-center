<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

return [
    'db'              => [
        'driver' => 'pdo',
        'dsn'    => 'mysql:dbname=zf-center-test;host=localhost;charset=utf8',
        'user'   => 'zf-center',
        'pass'   => 'geheim',
    ],
];
