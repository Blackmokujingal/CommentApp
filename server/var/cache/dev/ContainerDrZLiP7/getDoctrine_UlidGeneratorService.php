<?php

namespace ContainerDrZLiP7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_UlidGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.ulid_generator' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Id'.\DIRECTORY_SEPARATOR.'AbstractIdGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'IdGenerator'.\DIRECTORY_SEPARATOR.'UlidGenerator.php';

        return $container->privates['doctrine.ulid_generator'] = new \Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator(NULL);
    }
}
