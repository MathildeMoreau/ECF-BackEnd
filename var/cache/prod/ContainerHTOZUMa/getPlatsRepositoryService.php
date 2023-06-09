<?php

namespace ContainerHTOZUMa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlatsRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PlatsRepository' shared autowired service.
     *
     * @return \App\Repository\PlatsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PlatsRepository'] = new \App\Repository\PlatsRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
