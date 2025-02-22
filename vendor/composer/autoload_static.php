<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38fdb9ee89b6a4c075537f17f5166447
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'STP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'STP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'STP\\Admin\\Admin' => __DIR__ . '/../..' . '/Includes/Admin/Admin.php',
        'STP\\Api\\STPApi' => __DIR__ . '/../..' . '/Includes/Api/STPApi.php',
        'STP\\Base\\Activate' => __DIR__ . '/../..' . '/Includes/Base/Activate.php',
        'STP\\Base\\Deactivate' => __DIR__ . '/../..' . '/Includes/Base/Deactivate.php',
        'STP\\Base\\Enqueue' => __DIR__ . '/../..' . '/Includes/Base/Enqueue.php',
        'STP\\Bootstrap' => __DIR__ . '/../..' . '/Includes/Bootstrap.php',
        'STP\\Database\\STPdb' => __DIR__ . '/../..' . '/Includes/Database/STPdb.php',
        'STP\\Traits\\Singleton' => __DIR__ . '/../..' . '/Includes/Traits/Singleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38fdb9ee89b6a4c075537f17f5166447::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38fdb9ee89b6a4c075537f17f5166447::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38fdb9ee89b6a4c075537f17f5166447::$classMap;

        }, null, ClassLoader::class);
    }
}
