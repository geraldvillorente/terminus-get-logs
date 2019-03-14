<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc99ab27c2d8eb11a2a4c36badabffe07
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Pantheon\\TerminusRsync\\' => 23,
            'Pantheon\\TerminusGetLogs\\' => 25,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Pantheon\\TerminusRsync\\' => 
        array (
            0 => __DIR__ . '/..' . '/pantheon-systems/terminus-rsync-plugin/src',
        ),
        'Pantheon\\TerminusGetLogs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpOption\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpoption/phpoption/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc99ab27c2d8eb11a2a4c36badabffe07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc99ab27c2d8eb11a2a4c36badabffe07::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc99ab27c2d8eb11a2a4c36badabffe07::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}