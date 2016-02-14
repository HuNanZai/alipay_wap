<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 9:24
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

class BaseArrayHandler
{
    /**
     * 获取键值对应的set方法
     * eg: aaa_bbb_ccc=>setAaaBbbCcc
     *
     * @param $key
     *
     * @return string
     */
    public function getKeySetMethod($key)
    {
        $method = "set";
        $tmp    = explode('_', $key);
        if (count($tmp) == 1) {
            $method .= ucfirst(strtolower($key));
        } else {
            foreach ($tmp as $key => $value) {
                $method .= ucfirst(strtolower($value));
            }
        }

        return $method;
    }
}
