<?php

namespace ContainerRIeVafb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Io7_A3JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Io7.A3J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Io7.A3J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminRncpController::delete' => ['privates', '.service_locator.LWw.98V', 'get_ServiceLocator_LWw_98VService', true],
            'App\\Controller\\AdminRncpController::edit' => ['privates', '.service_locator.LWw.98V', 'get_ServiceLocator_LWw_98VService', true],
            'App\\Controller\\AdminRncpController::index' => ['privates', '.service_locator.RcVufpi', 'get_ServiceLocator_RcVufpiService', true],
            'App\\Controller\\AdminRncpController::new' => ['privates', '.service_locator.RcVufpi', 'get_ServiceLocator_RcVufpiService', true],
            'App\\Controller\\AdminRncpController::show' => ['privates', '.service_locator.cOSnBWz', 'get_ServiceLocator_COSnBWzService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminRncpController:delete' => ['privates', '.service_locator.LWw.98V', 'get_ServiceLocator_LWw_98VService', true],
            'App\\Controller\\AdminRncpController:edit' => ['privates', '.service_locator.LWw.98V', 'get_ServiceLocator_LWw_98VService', true],
            'App\\Controller\\AdminRncpController:index' => ['privates', '.service_locator.RcVufpi', 'get_ServiceLocator_RcVufpiService', true],
            'App\\Controller\\AdminRncpController:new' => ['privates', '.service_locator.RcVufpi', 'get_ServiceLocator_RcVufpiService', true],
            'App\\Controller\\AdminRncpController:show' => ['privates', '.service_locator.cOSnBWz', 'get_ServiceLocator_COSnBWzService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminRncpController::delete' => '?',
            'App\\Controller\\AdminRncpController::edit' => '?',
            'App\\Controller\\AdminRncpController::index' => '?',
            'App\\Controller\\AdminRncpController::new' => '?',
            'App\\Controller\\AdminRncpController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminRncpController:delete' => '?',
            'App\\Controller\\AdminRncpController:edit' => '?',
            'App\\Controller\\AdminRncpController:index' => '?',
            'App\\Controller\\AdminRncpController:new' => '?',
            'App\\Controller\\AdminRncpController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
