<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

use CompanyModel\Hydrator\CompanyHydrator;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'hydrators' => [
        'factories' => [
            CompanyHydrator::class => InvokableFactory::class,
        ],
    ],
];
