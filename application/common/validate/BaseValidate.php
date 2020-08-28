<?php


namespace app\common\validate;


use app\common\utils\HttpCode;
use think\Validate;

class BaseValidate extends Validate
{
    /**
     * 执行参数验证
     * @param string $scene 场景
     * @return bool
     */
    public function goCheck($scene = 'default')
    {
        $params = input('param.');
        $result = $this->scene($scene)->check($params);
        if (!$result) {
            exception($this->error, HttpCode::INVALID_REQUEST);
        }
        return true;
    }

    /**
     * 自定义验证，参数必须是正整数
     */
    protected function isPositiveInteger($value)
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 自定义验证，不允许为空
     */
    protected function isNotEmpty($value)
    {
        if (empty($value)) {
            return false;
        } else {
            return true;
        }
    }
}