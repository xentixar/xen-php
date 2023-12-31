<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite4ce7c17882d857c2ad7f103bcd9f977
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

        spl_autoload_register(array('ComposerAutoloaderInite4ce7c17882d857c2ad7f103bcd9f977', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite4ce7c17882d857c2ad7f103bcd9f977', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite4ce7c17882d857c2ad7f103bcd9f977::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
