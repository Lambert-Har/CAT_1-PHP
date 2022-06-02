<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite3f0bbf5c3a4b7bc75366891dc28c75f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite3f0bbf5c3a4b7bc75366891dc28c75f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite3f0bbf5c3a4b7bc75366891dc28c75f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite3f0bbf5c3a4b7bc75366891dc28c75f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
