<?php

namespace ContainerYx6jp1z;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A45GxH5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A45GxH5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A45GxH5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'accueil' => ['privates', '.errored..service_locator.A45GxH5.App\\Entity\\Accueil', NULL, 'Cannot autowire service ".service_locator.A45GxH5": it references class "App\\Entity\\Accueil" but no such service exists.'],
            'accueilRepository' => ['privates', 'App\\Repository\\AccueilRepository', 'getAccueilRepositoryService', true],
        ], [
            'accueil' => 'App\\Entity\\Accueil',
            'accueilRepository' => 'App\\Repository\\AccueilRepository',
        ]);
    }
}
