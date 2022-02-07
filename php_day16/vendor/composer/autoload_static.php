<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57c223c9f3f18abdb44d6c4a909a5d76
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57c223c9f3f18abdb44d6c4a909a5d76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57c223c9f3f18abdb44d6c4a909a5d76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit57c223c9f3f18abdb44d6c4a909a5d76::$classMap;

        }, null, ClassLoader::class);
    }
}