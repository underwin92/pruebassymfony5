<?php

namespace ContainerOoqVlZx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XwkJkGDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xwkJkGD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xwkJkGD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', '.errored.GOxvON_', NULL, 'Cannot determine controller argument for "App\\Controller\\DefaultController::index()": the $mailer argument is type-hinted with the non-existent class or interface: "Swift_Mailer".'],
        ], [
            'mailer' => '?',
        ]);
    }
}