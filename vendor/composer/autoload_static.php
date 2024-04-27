<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8666e5cba3bfd33772e75f039ef9ab74
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'alihesarian\\ControllerTheme\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'alihesarian\\ControllerTheme\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8666e5cba3bfd33772e75f039ef9ab74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8666e5cba3bfd33772e75f039ef9ab74::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8666e5cba3bfd33772e75f039ef9ab74::$classMap;

        }, null, ClassLoader::class);
    }
}
