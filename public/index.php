<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
*/
// 加载项目依赖
require __DIR__.'/../vendor/autoload.php';
/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/
//创建 Laravel 应用实例
$app = require_once __DIR__.'/../bootstrap/app.php';
/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
| 接收请求并响应
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
// 实例化http内核
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
// 处理请求
$response = $kernel->handle(
// 创建请求实例
    $request = Illuminate\Http\Request::capture()
);
// 发送响应
$response->send();

$kernel->terminate($request, $response);
