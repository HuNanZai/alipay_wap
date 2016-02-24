<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/24
 * Time: 14:26
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\CallbackParam;

class ArrayCallbackParamHandler extends BaseArrayHandler
{
    /**
     * 获取回调的参数
     *
     * @return CallbackParam
     */
    public function getParam()
    {
        $callback_param = new CallbackParam();

        $this->setParam($callback_param);

        return $callback_param;
    }
}
