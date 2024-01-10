<?php

namespace ContainerSqVEz1T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEquipsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EquipsController' shared autowired service.
     *
     * @return \App\Controller\EquipsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EquipsController.php';

        $container->services['App\\Controller\\EquipsController'] = $instance = new \App\Controller\EquipsController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\EquipsController', $container));

        return $instance;
    }
}