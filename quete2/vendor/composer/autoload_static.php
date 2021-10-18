<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a2f6c979d583224964971b37d900da5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a2f6c979d583224964971b37d900da5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a2f6c979d583224964971b37d900da5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a2f6c979d583224964971b37d900da5::$classMap;

        }, null, ClassLoader::class);
    }
}
