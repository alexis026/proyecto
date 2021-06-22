<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4b6ffed7c959d9ac2b49456d83e6691
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kawschool\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kawschool\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita4b6ffed7c959d9ac2b49456d83e6691::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4b6ffed7c959d9ac2b49456d83e6691::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4b6ffed7c959d9ac2b49456d83e6691::$classMap;

        }, null, ClassLoader::class);
    }
}
