<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/18
 * Time: 11:14
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Support;

use HuNanZai\Component\Pay\Package\Alipay_wap\Exception\InvalidParamException;

class String
{
    /**
     * 将传入的键值zhua
     *
     * @param $key
     *
     * @return string
     * @throws InvalidParamException
     */
    public static function convertKeyToFuncName($key)
    {
        if (!is_string($key) && strlen($key) <= 0) {
            throw new InvalidParamException('string', $key);
        }

        $func_name = "set";
        $tmp       = explode('_', $key);
        if (count($tmp) == 1) {
            $func_name .= ucfirst(strtolower($key));
        } else {
            foreach ($tmp as $key => $value) {
                $func_name .= ucfirst(strtolower($value));
            }
        }

        return $func_name;
    }
}
