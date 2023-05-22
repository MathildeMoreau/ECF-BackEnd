<?php

namespace ContainerHTOZUMa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_WriteService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.listener.view.write' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\WriteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.listener.view.write'] = new \ApiPlatform\Symfony\EventListener\WriteListener(new \ApiPlatform\State\CallableProcessor(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor' => ['privates', 'api_platform.doctrine.orm.state.persist_processor', 'getApiPlatform_Doctrine_Orm_State_PersistProcessorService', true],
            'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor' => ['privates', 'api_platform.doctrine.orm.state.remove_processor', 'getApiPlatform_Doctrine_Orm_State_RemoveProcessorService', true],
            'App\\State\\PlatPersister' => ['privates', 'App\\State\\PlatPersister', 'getPlatPersisterService', true],
            'api_platform.doctrine.orm.state.persist_processor' => ['privates', 'api_platform.doctrine.orm.state.persist_processor', 'getApiPlatform_Doctrine_Orm_State_PersistProcessorService', true],
            'api_platform.doctrine.orm.state.remove_processor' => ['privates', 'api_platform.doctrine.orm.state.remove_processor', 'getApiPlatform_Doctrine_Orm_State_RemoveProcessorService', true],
        ], [
            'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor' => 'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor',
            'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor' => 'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor',
            'App\\State\\PlatPersister' => 'App\\State\\PlatPersister',
            'api_platform.doctrine.orm.state.persist_processor' => 'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor',
            'api_platform.doctrine.orm.state.remove_processor' => 'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor',
        ])), ($container->privates['api_platform.symfony.iri_converter'] ?? $container->getApiPlatform_Symfony_IriConverterService()), ($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()), ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService()), ($container->privates['api_platform.uri_variables.converter'] ?? $container->getApiPlatform_UriVariables_ConverterService()));
    }
}
