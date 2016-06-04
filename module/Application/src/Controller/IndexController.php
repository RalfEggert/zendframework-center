<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace Application\Controller;

use AdvertModel\Repository\AdvertRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class IndexController
 *
 * @package Application\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * @var AdvertRepositoryInterface
     */
    private $advertRepository;

    /**
     * @param AdvertRepositoryInterface $advertRepository
     */
    public function setAdvertRepository($advertRepository)
    {
        $this->advertRepository = $advertRepository;
    }

    /**
     *
     */
    public function indexAction()
    {
        $randomJob     = $this->advertRepository->getRandomAdvert('job');
        $randomProject = $this->advertRepository->getRandomAdvert(
            'project'
        );

        var_dump($randomJob);
        var_dump($randomProject);
        exit;
    }
}
