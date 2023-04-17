<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitceab1d2fb8ef7d605826b4d54f296b09
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitceab1d2fb8ef7d605826b4d54f296b09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitceab1d2fb8ef7d605826b4d54f296b09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitceab1d2fb8ef7d605826b4d54f296b09::$classMap;

        }, null, ClassLoader::class);
    }
}
