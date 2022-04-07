<?php

namespace ContainerBVSoXQt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RzsDkoDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rzsDkoD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rzsDkoD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'postRepo' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'postRepo' => 'App\\Repository\\PostRepository',
        ]);
    }
}
