<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20bc1dbf7ea7242c9634dcf6f82063ee
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Richard\\RandomPasswordGeneratorApi\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Richard\\RandomPasswordGeneratorApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit20bc1dbf7ea7242c9634dcf6f82063ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20bc1dbf7ea7242c9634dcf6f82063ee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20bc1dbf7ea7242c9634dcf6f82063ee::$classMap;

        }, null, ClassLoader::class);
    }
}
