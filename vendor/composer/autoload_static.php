<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b0fc185be3e6bcd63c787d23e41f590
{
    public static $classMap = array (
        'Ps_Banner' => __DIR__ . '/../..' . '/ps_banner.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2b0fc185be3e6bcd63c787d23e41f590::$classMap;

        }, null, ClassLoader::class);
    }
}
