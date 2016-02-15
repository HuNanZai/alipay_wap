<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 14:16
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\PayParam;

class ArrayPayParamHandler extends BaseArrayHandler
{
    /**
     * @return PayParam
     */
    public function getParam()
    {
        $pay_param = new PayParam();

        $this->setParam($pay_param);

        return $pay_param;
    }
}
