<?php

use Illuminate\Http\Request;
use Overtrue\EasySms\Exceptions\NoGatewayAvailableException;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
    $api->get('version', function() {
        $sms = app('easysms');
        try {
            $res = $sms->send(18835129770, [
                'data'      => ['code' => 6379],
                'template'  => 'SMS_129910014'
            ]);
            return response($res);
        } catch (NoGatewayAvailableException $e) {
            $message = $e->getException('aliyun')->getMessage();
            dd($message);
        }
    });
});

$api->version('v2', function($api) {
    $api->get('version', function() {
        return response('this is version v2');
    });
});
