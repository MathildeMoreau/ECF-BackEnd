<?php

namespace ContainerHTOZUMa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeCrudControllerCommand_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:admin:crud', [], 'Creates a new EasyAdmin CRUD controller class', false, #[\Closure(name: 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand')] function () use ($container): \EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand {
            return ($container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand'] ?? $container->load('getMakeCrudControllerCommandService'));
        });
    }
}
