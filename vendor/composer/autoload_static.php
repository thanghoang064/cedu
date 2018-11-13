<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92cd5263247f5308c2bafa69a8db7edc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92cd5263247f5308c2bafa69a8db7edc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92cd5263247f5308c2bafa69a8db7edc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}