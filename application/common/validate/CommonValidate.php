<?php

namespace app\common\validate;

use app\common\validate\BaseValidate;

class CommonValidate extends BaseValidate
{
    protected $rule = [
        'example' => 'require|isPositiveInteger'
    ];
    protected $scene = [
        'exampleAction' => ['example'],
    ];
    protected $message = [
        'example' => 'example规则错误'
    ];
}
