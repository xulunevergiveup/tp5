<?php


namespace app\common\exception;


use app\common\utils\HttpCode;
use app\common\utils\OutPut;
use think\exception\Handle;

/**
 * 自定义异常处理类
 * Class ExceptionHandler
 * @package app\common\exception
 */
class ExceptionHandler extends Handle
{
    public function render(\Exception $e)
    {
        $module    = request()->module();
        $http_code = $e->getCode() ? $e->getCode() : HttpCode::INTERNAL_SERVER_ERROR;
        if ($module === 'api') {
            return OutPut::errorJson($e->getMessage(), [], $http_code);
        } elseif ($module === 'admin') {
            return OutPut::errorJson($e->getMessage(), [], HttpCode::OK);
//            return parent::render($e);
        } else {
            return parent::render($e);
        }
    }
}
