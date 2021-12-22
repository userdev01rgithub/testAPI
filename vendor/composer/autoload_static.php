<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e1ebd7a21a2709654e060ed1f6f4465
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e1ebd7a21a2709654e060ed1f6f4465::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e1ebd7a21a2709654e060ed1f6f4465::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e1ebd7a21a2709654e060ed1f6f4465::$classMap;

        }, null, ClassLoader::class);
    }
}