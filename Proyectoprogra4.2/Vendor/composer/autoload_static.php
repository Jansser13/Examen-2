<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a3917332b1be6c7d85323949cd5edec
{
    public static $classMap = array (
        'controller\\BaseController' => __DIR__ . '/../..' . '/Controller/BaseController.php',
        'controller\\incidentescontroller' => __DIR__ . '/../..' . '/Controller/incidentescontroller.php',
        'model\\MIncidentes' => __DIR__ . '/../..' . '/Model/MIncidentes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3a3917332b1be6c7d85323949cd5edec::$classMap;

        }, null, ClassLoader::class);
    }
}