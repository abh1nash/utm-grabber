<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e5a3f302287ce42c2bdedf0821bee1f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abhinash\\UtmGrabber\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abhinash\\UtmGrabber\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Abhinash\\UtmGrabber\\Assets' => __DIR__ . '/../..' . '/app/Assets.php',
        'Abhinash\\UtmGrabber\\Core' => __DIR__ . '/../..' . '/app/Core.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e5a3f302287ce42c2bdedf0821bee1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e5a3f302287ce42c2bdedf0821bee1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e5a3f302287ce42c2bdedf0821bee1f::$classMap;

        }, null, ClassLoader::class);
    }
}