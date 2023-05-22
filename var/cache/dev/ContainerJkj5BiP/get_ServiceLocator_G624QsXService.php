<?php

namespace ContainerJkj5BiP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G624QsXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g624QsX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g624QsX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\PersonnelRepository', 'getPersonnelRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\PersonnelRepository',
        ]);
    }
}
