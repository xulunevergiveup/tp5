<?php


namespace app\common\utils;

/**
 * 资源输出工具类
 * Class OutPut
 * @package app\common\utils
 */
class OutPut
{
    /**
     * 成功（json）
     * @param array $data 数据
     * @param int $http_code http状态码
     * @return json
     */
    public static function successJson($data = [], $http_code = HttpCode::OK)
    {
        return json([
            'code'    => StatusCode::SUCCESS,
            'message' => 'success',
            'data'    => $data,
        ], $http_code);
    }

    /**
     * 失败（json）
     * @param int $code 全局状态码
     * @param array $data 数据
     * @param int $http_code http状态码
     * @return json
     */
    public static function errorJson($code = 0, $data = [], $http_code = HttpCode::INTERNAL_SERVER_ERROR)
    {
        if (isset(StatusCode::DIC[$code])) {
            $result['code']    = $code;
            $result['message'] = StatusCode::outPutMessage($code);
        } else {
            $result['code']    = StatusCode::ERROR;
            $result['message'] = $code;
        }
        $result['data'] = $data;
        return json($result, $http_code);
    }
}
