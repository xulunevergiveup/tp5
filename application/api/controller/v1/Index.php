<?php


namespace app\api\controller\v1;


use app\common\utils\HttpCode;
use app\common\utils\OutPut;
use app\common\utils\StatusCode;
use think\Controller;

/**
 * 首页控制器类
 * Class Index
 * @package app\api\controller
 */
class Index extends Controller
{
    public function index()
    {
        return OutPut::successJson('哈哈');
    }
}
