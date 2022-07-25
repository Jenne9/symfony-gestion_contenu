<?php

namespace ContainerHz7pAsi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1YVyKxYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1YVyKxY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1YVyKxY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminAccueilController::delete' => ['privates', '.service_locator.A45GxH5', 'get_ServiceLocator_A45GxH5Service', true],
            'App\\Controller\\AdminAccueilController::edit' => ['privates', '.service_locator.A45GxH5', 'get_ServiceLocator_A45GxH5Service', true],
            'App\\Controller\\AdminAccueilController::index' => ['privates', '.service_locator.EDFtQ.E', 'get_ServiceLocator_EDFtQ_EService', true],
            'App\\Controller\\AdminAccueilController::new' => ['privates', '.service_locator.EDFtQ.E', 'get_ServiceLocator_EDFtQ_EService', true],
            'App\\Controller\\AdminAccueilController::show' => ['privates', '.service_locator.rr4DSh4', 'get_ServiceLocator_Rr4DSh4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminAccueilController:delete' => ['privates', '.service_locator.A45GxH5', 'get_ServiceLocator_A45GxH5Service', true],
            'App\\Controller\\AdminAccueilController:edit' => ['privates', '.service_locator.A45GxH5', 'get_ServiceLocator_A45GxH5Service', true],
            'App\\Controller\\AdminAccueilController:index' => ['privates', '.service_locator.EDFtQ.E', 'get_ServiceLocator_EDFtQ_EService', true],
            'App\\Controller\\AdminAccueilController:new' => ['privates', '.service_locator.EDFtQ.E', 'get_ServiceLocator_EDFtQ_EService', true],
            'App\\Controller\\AdminAccueilController:show' => ['privates', '.service_locator.rr4DSh4', 'get_ServiceLocator_Rr4DSh4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminAccueilController::delete' => '?',
            'App\\Controller\\AdminAccueilController::edit' => '?',
            'App\\Controller\\AdminAccueilController::index' => '?',
            'App\\Controller\\AdminAccueilController::new' => '?',
            'App\\Controller\\AdminAccueilController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminAccueilController:delete' => '?',
            'App\\Controller\\AdminAccueilController:edit' => '?',
            'App\\Controller\\AdminAccueilController:index' => '?',
            'App\\Controller\\AdminAccueilController:new' => '?',
            'App\\Controller\\AdminAccueilController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}