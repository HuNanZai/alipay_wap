<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/17
 * Time: 9:34
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Exception;

class InvalidParamException extends \Exception
{
    public function __construct($require, $value)
    {
        $this->message = "expected: {$require}, got: ".var_export($value, 1);
    }
}
