<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb44cc79a0eaef9cd9c2f2ac697cbe9c0
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'andreskrey\\Readability\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'andreskrey\\Readability\\' => 
        array (
            0 => __DIR__ . '/..' . '/andreskrey/readability.php/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb44cc79a0eaef9cd9c2f2ac697cbe9c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb44cc79a0eaef9cd9c2f2ac697cbe9c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb44cc79a0eaef9cd9c2f2ac697cbe9c0::$classMap;

        }, null, ClassLoader::class);
    }
}