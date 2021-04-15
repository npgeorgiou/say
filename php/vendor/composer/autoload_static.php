<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e3c03f73ccf627b0a2ba6aa243ff34d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpParser\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e3c03f73ccf627b0a2ba6aa243ff34d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e3c03f73ccf627b0a2ba6aa243ff34d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e3c03f73ccf627b0a2ba6aa243ff34d::$classMap;

        }, null, ClassLoader::class);
    }
}
