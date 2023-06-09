<?php

namespace ContainerHTOZUMa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMenuRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MenuRepository' shared autowired service.
     *
     * @return \App\Repository\MenuRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MenuRepository'] = new \App\Repository\MenuRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
