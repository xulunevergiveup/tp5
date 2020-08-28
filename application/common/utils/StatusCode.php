<?php


namespace app\common\utils;

/**
 * 全局状态码工具类
 * Class StatusCode
 * @package app\common\utils
 */
class StatusCode
{
    // 全局状态码
    const ERROR = 0;// 错误
    const SUCCESS = 20000;//成功
    const ROUTE_ERROR = 40000;// 路由错误
    const USERNAME_OR_PASSWORD_NOT_MATCH = 50001;// 账号或密码错误
    const LOGIN_FAIL = 50002;// 登陆失效或未登录
    const NO_AUTH = 50003;// 没有权限

    // 字典
    const DIC = [
        0 => 'ERROR',
        20000 => 'SUCCESS',
        40000 => 'ROUTE_ERROR',
        50001 => 'USERNAME_OR_PASSWORD_NOT_MATCH',
        50002 => 'LOGIN_FAIL',
        50003 => 'NO_AUTH'
    ];

    /**
     * 全局状态码含义输出
     * @param string $code 全局状态码
     * @return string
     */
    public static function outPutMessage($code = '')
    {
        return self::DIC[$code] ?? '';
    }
}