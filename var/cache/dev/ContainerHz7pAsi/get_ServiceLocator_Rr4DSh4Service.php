<?php

namespace ContainerHz7pAsi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rr4DSh4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rr4DSh4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rr4DSh4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'accueil' => ['privates', '.errored..service_locator.rr4DSh4.App\\Entity\\Accueil', NULL, 'Cannot autowire service ".service_locator.rr4DSh4": it references class "App\\Entity\\Accueil" but no such service exists.'],
        ], [
            'accueil' => 'App\\Entity\\Accueil',
        ]);
    }
}