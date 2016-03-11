<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/15
 * Time: 14:14
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\RefundParam;

class ArrayRefundParamHandler extends BaseArrayHandler
{
    /**
     * @return RefundParam
     */
    public function getParam()
    {
        $refund_param = new RefundParam();

        $this->setParam($refund_param);

        return $refund_param;
    }
}
