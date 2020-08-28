<?php

namespace app\home\controller;

use app\common\utils\HttpCode;
use app\common\utils\OutPut;
use app\common\utils\StatusCode;

class Index
{
    /**
     * 首页
     * @return string
     */
    public function index()
    {
        return view('home@index');
    }

    /**
     * miss路由
     * @return json
     */
    public function miss()
    {
        $path = request()->path();
        if (substr($path, 0, 3) === 'api') {
            return OutPut::errorJson(StatusCode::ROUTE_ERROR, [], HttpCode::NOT_FOUND);
        } else {
            exception('404 not found');
        }
    }
}
