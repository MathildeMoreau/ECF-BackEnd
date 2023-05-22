<?php

namespace ContainerJkj5BiP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DIod9E8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dIod9E8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dIod9E8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\PlatsRepository', 'getPlatsRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\PlatsRepository',
        ]);
    }
}
