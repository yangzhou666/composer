<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12e03ad88b9faa3022a135d316ee08d3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shopyz\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shopyz\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/shopyz',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit12e03ad88b9faa3022a135d316ee08d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12e03ad88b9faa3022a135d316ee08d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12e03ad88b9faa3022a135d316ee08d3::$classMap;

        }, null, ClassLoader::class);
    }
}
