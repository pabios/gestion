<?php

namespace Container1fCTrwZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Loader_JsonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        return $container->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }
}
