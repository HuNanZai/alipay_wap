<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 14:16
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\PayParam;
use HuNanZai\Component\Log\Service as Logger;

class ArrayPayParamHandler
{
    private $param = null;

    public function __construct(array $param_array)
    {
        $this->param = $param_array;
    }

    /**
     * @return PayParam
     */
    public function getPayParam()
    {
        $pay_param = new PayParam();

        foreach ($this->param as $key => $val) {
            $method = "set{$key}";

            if (method_exists($pay_param, $method)) {
                call_user_func_array(array($pay_param, $method), array($val));
            }
        }

        Logger::addInfo('alipay_wap_handler_arraypayparam', 'getPayParam', array('res'=>(string)$pay_param));

        return $pay_param;
    }
}
