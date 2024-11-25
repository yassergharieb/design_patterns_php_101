<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a874d4ee8f66e7e6a446975caddd568
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yghareb\\DesignPatterns\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yghareb\\DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a874d4ee8f66e7e6a446975caddd568::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a874d4ee8f66e7e6a446975caddd568::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a874d4ee8f66e7e6a446975caddd568::$classMap;

        }, null, ClassLoader::class);
    }
}
