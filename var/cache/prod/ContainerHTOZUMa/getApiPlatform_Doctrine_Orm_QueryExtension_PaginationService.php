<?php

namespace ContainerHTOZUMa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.doctrine.orm.query_extension.pagination' shared service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Extension\PaginationExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.doctrine.orm.query_extension.pagination'] = new \ApiPlatform\Doctrine\Orm\Extension\PaginationExtension(($container->services['doctrine'] ?? $container->getDoctrineService()), new \ApiPlatform\State\Pagination\Pagination($container->parameters['api_platform.collection.pagination'], $container->parameters['api_platform.graphql.collection.pagination']));
    }
}