<?php


namespace app\common\utils;

/**
 * http状态码工具类
 * Class HttpCode
 * @package app\common\utils
 */
class HttpCode
{
    // http状态码
    const OK = 200;// [GET/PUT/PATCH]：服务器成功返回用户请求的数据，该操作是幂等的（Idempotent）
    const CREATED = 201;// [POST]：用户新建数据成功
    const ACCEPTED = 202;// [*]：表示一个请求已经进入后台排队（异步任务）
    const NO_CONTENT = 204;// [DELETE]：用户删除数据成功。
    const INVALID_REQUEST = 400;// [POST/PUT/PATCH]：用户发出的请求有错误，服务器没有进行新建或修改数据的操作，该操作是幂等的
    const UNAUTHORIZED = 401;// [*]：表示用户没有权限（令牌、用户名、密码错误）
    const FORBIDDEN = 403;// [*] 表示用户得到授权（与401错误相对），但是访问是被禁止的
    const NOT_FOUND = 404;// [*]：用户发出的请求针对的是不存在的记录，服务器没有进行操作，该操作是幂等的
    const NOT_ACCEPTABLE = 406;// [GET]：用户请求的格式不可得（比如用户请求JSON格式，但是只有XML格式）
    const GONE = 410;// [GET]：用户请求的资源被永久删除，且不会再得到的
    const UNPROCESABLE_ENTITY = 422;// [POST/PUT/PATCH] 当创建一个对象时，发生一个验证错误
    const INTERNAL_SERVER_ERROR = 500;// [*]：服务器发生错误，用户将无法判断发出的请求是否成功

    // 字典
    const DIC = [
        200 => 'OK',
        201 => 'CREATED',
        202 => 'ACCEPTED',
        204 => 'NO_CONTENT',
        400 => 'INVALID_REQUEST',
        401 => 'UNAUTHORIZED',
        403 => 'FORBIDDEN',
        404 => 'NOT_FOUND',
        406 => 'NOT_ACCEPTABLE',
        410 => 'GONE',
        422 => 'UNPROCESABLE_ENTITY',
        500 => 'INTERNAL_SERVER_ERROR'
    ];

    /**
     * http状态码含义输出
     * @param string $code http状态码
     * @return string
     */
    public static function outPutMessage($code = '')
    {
        return self::DIC[$code] ?? '';
    }
}