<?php

namespace Container1fCTrwZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XdMPwIJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XdMPwIJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XdMPwIJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assets' => ['privates', '.errored..service_locator.XdMPwIJ.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets', NULL, 'Cannot autowire service ".service_locator.XdMPwIJ": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets" but no such service exists.'],
        ], [
            'assets' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets',
        ]);
    }
}
