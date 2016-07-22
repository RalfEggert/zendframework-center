<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace CompanyModelTest\Filter;

use CompanyModel\Filter\LogoFileUpload;
use PHPUnit_Framework_TestCase;

/**
 * Class LogoFileUploadTest
 *
 * @package CompanyModelTest\Filter
 */
class LogoFileUploadTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group company-model
     * @group model
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists(LogoFileUpload::class));
    }
}
