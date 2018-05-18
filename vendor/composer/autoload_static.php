<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab491ee59e1264ad0b50430a83662355
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '6195ccae414b7a82ab47247beb894d66' => __DIR__ . '/..' . '/nezamy/route/system/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'System\\' => 7,
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'J' => 
        array (
            'Jeanku\\Rabbitmq\\' => 16,
            'Jeanku\\Database\\' => 16,
            'Jeanku\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'System\\' => 
        array (
            0 => __DIR__ . '/..' . '/nezamy/route/system',
        ),
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Jeanku\\Rabbitmq\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeanku/rabbitmq/src',
        ),
        'Jeanku\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeanku/database',
        ),
        'Jeanku\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeanku/util',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/Controllers/BaseController.php',
        'App\\Controllers\\Container' => __DIR__ . '/../..' . '/app/Controllers/Container.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'App\\Controllers\\MenuController' => __DIR__ . '/../..' . '/app/Controllers/MenuController.php',
        'App\\Exceptions\\ServiceException' => __DIR__ . '/../..' . '/app/Exceptions/ServiceException.php',
        'App\\Models\\Article' => __DIR__ . '/../..' . '/app/Models/Article.php',
        'App\\Models\\BaseModel' => __DIR__ . '/../..' . '/app/Models/BaseModel.php',
        'App\\Models\\CoachModel' => __DIR__ . '/../..' . '/app/Models/CoachModel.php',
        'App\\Models\\MenuModel' => __DIR__ . '/../..' . '/app/Models/MenuModel.php',
        'App\\Modules\\BaseModule' => __DIR__ . '/../..' . '/app/Modules/BaseModule.php',
        'App\\Modules\\Menu' => __DIR__ . '/../..' . '/app/Modules/Menu.php',
        'App\\Services\\Demo' => __DIR__ . '/../..' . '/app/Services/Demo.php',
        'App\\Services\\Email' => __DIR__ . '/../..' . '/app/Services/Email.php',
        'App\\Services\\Fanout1' => __DIR__ . '/../..' . '/app/Services/Fanout1.php',
        'App\\Services\\Fanout2' => __DIR__ . '/../..' . '/app/Services/Fanout2.php',
        'App\\Services\\Log' => __DIR__ . '/../..' . '/app/Services/Log.php',
        'App\\Util\\Curl' => __DIR__ . '/../..' . '/app/Util/Curl.php',
        'App\\Util\\Enum\\Enum' => __DIR__ . '/../..' . '/app/Enum/Enum.php',
        'App\\Util\\Enum\\UserFrozenStatus' => __DIR__ . '/../..' . '/app/Enum/UserFrozenStatus.php',
        'App\\Util\\Image\\Image' => __DIR__ . '/../..' . '/app/Util/Image/Image.php',
        'App\\Util\\Image\\ImageObject' => __DIR__ . '/../..' . '/app/Util/Image/ImageObject.php',
        'App\\Util\\SpeedLimiter' => __DIR__ . '/../..' . '/app/Util/SpeedLimiter.php',
        'App\\Util\\Validate' => __DIR__ . '/../..' . '/app/Util/Validate.php',
        'App\\Util\\ValidateResult' => __DIR__ . '/../..' . '/app/Util/Validate.php',
        'App\\Utils\\Config' => __DIR__ . '/../..' . '/app/Utils/Config.php',
        'App\\Utils\\Facades\\Config' => __DIR__ . '/../..' . '/app/Utils/Facades/Config.php',
        'App\\Utils\\Facades\\Facade' => __DIR__ . '/../..' . '/app/Utils/Facades/Facade.php',
        'App\\Utils\\Facades\\Log' => __DIR__ . '/../..' . '/app/Utils/Facades/Log.php',
        'App\\Utils\\Facades\\Request' => __DIR__ . '/../..' . '/app/Utils/Facades/Request.php',
        'App\\Utils\\Log' => __DIR__ . '/../..' . '/app/Utils/Log.php',
        'App\\Utils\\Request' => __DIR__ . '/../..' . '/app/Utils/Request.php',
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'SessionUpdateTimestampHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/SessionUpdateTimestampHandlerInterface.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab491ee59e1264ad0b50430a83662355::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab491ee59e1264ad0b50430a83662355::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab491ee59e1264ad0b50430a83662355::$classMap;

        }, null, ClassLoader::class);
    }
}
