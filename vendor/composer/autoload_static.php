<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb83ac11cfb7850b6b6435ad322fe279a
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb83ac11cfb7850b6b6435ad322fe279a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb83ac11cfb7850b6b6435ad322fe279a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}