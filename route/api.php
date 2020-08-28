<?php

// 首页
Route::group('api/:version/index', function () {
    Route::get('', 'api/:version.Index/index');// 首页
});

return [

];
