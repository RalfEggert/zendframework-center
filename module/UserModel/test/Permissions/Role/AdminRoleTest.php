<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace UserModelTest\Permissions\Role;

use UserModel\Permissions\Role\AdminRole;
use PHPUnit_Framework_TestCase;

/**
 * Class AdminRoleTest
 *
 * @package UserModelTest\Role\Permissions
 */
class AdminRoleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group user-model
     * @group model
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists(AdminRole::class));
    }
}