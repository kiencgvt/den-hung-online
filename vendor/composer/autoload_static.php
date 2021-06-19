<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba7c1f37da5d4a7ff6276af67b2a7b61
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\Model\\' => 10,
            'Src\\Database\\' => 13,
            'Src\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
        'Src\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/database',
        ),
        'Src\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba7c1f37da5d4a7ff6276af67b2a7b61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba7c1f37da5d4a7ff6276af67b2a7b61::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba7c1f37da5d4a7ff6276af67b2a7b61::$classMap;

        }, null, ClassLoader::class);
    }
}
