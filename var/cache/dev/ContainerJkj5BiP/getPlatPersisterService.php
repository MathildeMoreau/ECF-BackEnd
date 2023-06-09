<?php

namespace ContainerJkj5BiP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlatPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\State\PlatPersister' shared autowired service.
     *
     * @return \App\State\PlatPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/State/PlatPersister.php';

        return $container->privates['App\\State\\PlatPersister'] = new \App\State\PlatPersister();
    }
}
