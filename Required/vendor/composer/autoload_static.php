<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a1d733fb279873bd632fb32c5b97ad1
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'raklib\\' => 7,
        ),
        'p' => 
        array (
            'pocketmine\\utils\\' => 17,
            'pocketmine\\snooze\\' => 18,
            'pocketmine\\nbt\\' => 15,
            'pocketmine\\math\\' => 16,
            'pocketmine\\' => 11,
        ),
        'P' => 
        array (
            'Particle\\Validator\\' => 19,
        ),
        'M' => 
        array (
            'Mdanter\\Ecc\\' => 12,
        ),
        'F' => 
        array (
            'FG\\' => 3,
        ),
        'D' => 
        array (
            'DaveRandom\\CallbackValidator\\' => 29,
        ),
        'A' => 
        array (
            'Ahc\\Json\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'raklib\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/raklib/src',
        ),
        'pocketmine\\utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/binaryutils/src',
        ),
        'pocketmine\\snooze\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/snooze/src',
        ),
        'pocketmine\\nbt\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/nbt/src',
        ),
        'pocketmine\\math\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/math/src',
        ),
        'pocketmine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/phpunit',
        ),
        'Particle\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/particle/validator/src',
        ),
        'Mdanter\\Ecc\\' => 
        array (
            0 => __DIR__ . '/..' . '/mdanter/ecc/src',
        ),
        'FG\\' => 
        array (
            0 => __DIR__ . '/..' . '/fgrosse/phpasn1/lib',
        ),
        'DaveRandom\\CallbackValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/daverandom/callback-validator/src',
        ),
        'Ahc\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/adhocore/json-comment/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'ArrayOutOfBoundsException' => __DIR__ . '/..' . '/pocketmine/spl/ArrayOutOfBoundsException.php',
        'AttachableLogger' => __DIR__ . '/..' . '/pocketmine/spl/AttachableLogger.php',
        'AttachableThreadedLogger' => __DIR__ . '/..' . '/pocketmine/spl/AttachableThreadedLogger.php',
        'BaseClassLoader' => __DIR__ . '/..' . '/pocketmine/spl/BaseClassLoader.php',
        'ClassCastException' => __DIR__ . '/..' . '/pocketmine/spl/ClassCastException.php',
        'ClassLoader' => __DIR__ . '/..' . '/pocketmine/spl/ClassLoader.php',
        'ClassNotFoundException' => __DIR__ . '/..' . '/pocketmine/spl/ClassNotFoundException.php',
        'ErrorUtils' => __DIR__ . '/..' . '/pocketmine/spl/ErrorUtils.php',
        'GlobalLogger' => __DIR__ . '/..' . '/pocketmine/spl/GlobalLogger.php',
        'InvalidArgumentCountException' => __DIR__ . '/..' . '/pocketmine/spl/InvalidArgumentCountException.php',
        'InvalidKeyException' => __DIR__ . '/..' . '/pocketmine/spl/InvalidKeyException.php',
        'InvalidStateException' => __DIR__ . '/..' . '/pocketmine/spl/InvalidStateException.php',
        'LogLevel' => __DIR__ . '/..' . '/pocketmine/spl/LogLevel.php',
        'Logger' => __DIR__ . '/..' . '/pocketmine/spl/Logger.php',
        'LoggerAttachment' => __DIR__ . '/..' . '/pocketmine/spl/LoggerAttachment.php',
        'PrefixedLogger' => __DIR__ . '/..' . '/pocketmine/spl/PrefixedLogger.php',
        'SimpleLogger' => __DIR__ . '/..' . '/pocketmine/spl/SimpleLogger.php',
        'SplFixedByteArray' => __DIR__ . '/..' . '/pocketmine/spl/SplFixedByteArray.php',
        'StringOutOfBoundsException' => __DIR__ . '/..' . '/pocketmine/spl/StringOutOfBoundsException.php',
        'ThreadException' => __DIR__ . '/..' . '/pocketmine/spl/ThreadException.php',
        'ThreadedLogger' => __DIR__ . '/..' . '/pocketmine/spl/ThreadedLogger.php',
        'ThreadedLoggerAttachment' => __DIR__ . '/..' . '/pocketmine/spl/ThreadedLoggerAttachment.php',
        'UndefinedConstantException' => __DIR__ . '/..' . '/pocketmine/spl/UndefinedConstantException.php',
        'UndefinedPropertyException' => __DIR__ . '/..' . '/pocketmine/spl/UndefinedPropertyException.php',
        'UndefinedVariableException' => __DIR__ . '/..' . '/pocketmine/spl/UndefinedVariableException.php',
        'UnsupportedOperationException' => __DIR__ . '/..' . '/pocketmine/spl/UnsupportedOperationException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a1d733fb279873bd632fb32c5b97ad1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a1d733fb279873bd632fb32c5b97ad1::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit3a1d733fb279873bd632fb32c5b97ad1::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit3a1d733fb279873bd632fb32c5b97ad1::$classMap;

        }, null, ClassLoader::class);
    }
}
