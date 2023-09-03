<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\App;

if(config("ms")){
    Route::domain(config("url_jk"), function () {
        Route::alias('jk','jk/Index');
        Route::bind('jk/index');
    });
    Route::domain(config("url_api"), 'pay/index');
    Route::domain(config("url"), 'index');
}else{
    Route::any('order','pay/index/order');
    Route::any('sytpay','pay/index/sytpay');
    Route::any('cehsald','jk/index/cehsald');
    Route::any('appPush','jk/index/appPush');
    Route::any('appHeart','jk/index/appHeart');
    Route::alias('jk','jk/Index');
}