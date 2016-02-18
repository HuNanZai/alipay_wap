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
use HuNanZai\Component\Pay\Package\Alipay_wap\Support\String;

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
            $method = String::convertKeyToFuncName($key);

            if (method_exists($param, $method)) {
                call_user_func_array(array($param, $method), array($value));
            }
        }

        Logger::addInfo('alipay_wap_handler_base', 'setParam', array('res'=>(string) $param));
    }

    /**
     * @return BaseParam
     */
    abstract public function getParam();
}
