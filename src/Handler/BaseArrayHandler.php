<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 9:24
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\BaseParam;
use HuNanZai\Component\Log\Service as Logger;

abstract class BaseArrayHandler
{
    protected $params = null;

    public function __construct(array $param_array)
    {
        $this->params = $param_array;
    }

    /**
     * 给param赋值的方法
     *
     * @param BaseParam $param
     */
    public function setParam(BaseParam &$param)
    {
        foreach ($this->params as $key => $value) {
            $method = $this->getKeySetMethod($key);

            if (method_exists($param, $method)) {
                call_user_func_array(array($param, $method), array($value));
            }
        }

        Logger::addInfo('alipay_wap_handler_base', 'setParam', array('res'=>(string) $param));
    }

    /**
     * 获取键值对应的set方法
     * eg: aaa_bbb_ccc=>setAaaBbbCcc
     *
     * @param $key
     *
     * @return string
     */
    private function getKeySetMethod($key)
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

    /**
     * @return BaseParam
     */
    abstract public function getParam();
}
