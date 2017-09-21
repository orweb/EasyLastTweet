<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28af4a832ca220ab12657fec4c619571
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'Orweb\\EasyLastTweetBundle' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28af4a832ca220ab12657fec4c619571::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28af4a832ca220ab12657fec4c619571::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit28af4a832ca220ab12657fec4c619571::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}