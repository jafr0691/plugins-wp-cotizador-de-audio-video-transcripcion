<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4556208a953378a51e85fb9d3f03212
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'D' => 
        array (
            'Dilab\\' => 6,
        ),
        'C' => 
        array (
            'Cake\\Filesystem\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Dilab\\' => 
        array (
            0 => __DIR__ . '/..' . '/dilab/resumable.php/src',
        ),
        'Cake\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/filesystem',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4556208a953378a51e85fb9d3f03212::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4556208a953378a51e85fb9d3f03212::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
