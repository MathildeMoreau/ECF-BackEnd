<?php

namespace Container7vOZEvP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/HostTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Routing/ApiLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DirectoryAwareLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Psr4DirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($container->services['kernel'] ?? $container->get('kernel', 1));

        $c = new \Symfony\Component\HttpKernel\Config\FileLocator($b);
        $d = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), 'dev');

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]), 'dev'));
        $a->addLoader(new \ApiPlatform\Symfony\Routing\ApiLoader($b, ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService()), $container, $container->parameters['api_platform.formats'], $container->parameters['api_platform.resource_class_directories'], false, true, true, false, false, NULL));
        $a->addLoader($d);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($c, $d));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($c, $d));
        $a->addLoader(new \Symfony\Component\Routing\Loader\Psr4DirectoryLoader($c));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true], []);
    }
}
