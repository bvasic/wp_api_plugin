<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31dd53249c355cafd8f7008aaaae6e63
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31dd53249c355cafd8f7008aaaae6e63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31dd53249c355cafd8f7008aaaae6e63::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
