<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1e23bb32480afc2056761760a9eb3b6
{
    public static $files = array (
        'c0f1afff5ccff5df281ab1061c4f27a6' => __DIR__ . '/../..' . '/core/tools.php',
    );

    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInitd1e23bb32480afc2056761760a9eb3b6' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitd1e23bb32480afc2056761760a9eb3b6' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'LoginController' => __DIR__ . '/../..' . '/app/controllers/LoginController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'RegisterController' => __DIR__ . '/../..' . '/app/controllers/RegisterController.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'User' => __DIR__ . '/../..' . '/core/User.php',
        'UserController' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd1e23bb32480afc2056761760a9eb3b6::$classMap;

        }, null, ClassLoader::class);
    }
}
