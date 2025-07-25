<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services
        ->defaults()
        ->autoconfigure()
        ->autowire()
    ;

    $services
        ->load('Codefog\\MemberContentBundle\\', __DIR__.'/../src')
        ->exclude(__DIR__.'/../src/ContaoManager')
        ->exclude(__DIR__.'/../src/DependencyInjection')
    ;
};
