<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce97cc24b4516e38a275104e52ce5b8b
{
    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'Openpay' => 
            array (
                0 => __DIR__ . '/..' . '/openpay/sdk',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitce97cc24b4516e38a275104e52ce5b8b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
