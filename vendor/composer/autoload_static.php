<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf10eacde3ff13c5900085b4e1d43cc84
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Harshpawar\\LaravelPassport\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Harshpawar\\LaravelPassport\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf10eacde3ff13c5900085b4e1d43cc84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf10eacde3ff13c5900085b4e1d43cc84::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf10eacde3ff13c5900085b4e1d43cc84::$classMap;

        }, null, ClassLoader::class);
    }
}
