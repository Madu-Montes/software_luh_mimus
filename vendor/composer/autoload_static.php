<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf17ac3d71cc62d8262d24ce889119767
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'public\\' => 7,
        ),
        'c' => 
        array (
            'core\\' => 5,
            'config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'public\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf17ac3d71cc62d8262d24ce889119767::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf17ac3d71cc62d8262d24ce889119767::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf17ac3d71cc62d8262d24ce889119767::$classMap;

        }, null, ClassLoader::class);
    }
}
