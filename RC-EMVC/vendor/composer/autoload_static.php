<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb619457165b88e888784b1540f57c565
{
    public static $files = array (
        'cd3fd6f35e8730f5d9edf08430fc9e09' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb619457165b88e888784b1540f57c565::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb619457165b88e888784b1540f57c565::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}