<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb42dcaa07b30a59f89c34bbac1598527
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb42dcaa07b30a59f89c34bbac1598527::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb42dcaa07b30a59f89c34bbac1598527::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
