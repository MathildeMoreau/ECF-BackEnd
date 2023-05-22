<?php

namespace ContainerHTOZUMa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $container->getEntityFactoryService()), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'] ?? $container->load('getFormFactoryService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
