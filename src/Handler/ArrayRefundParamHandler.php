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
        //额外的一些默认参数设置,也可以考虑放到构造函数中
        $refund_param->setBatchNum(1);
        //...

        return $refund_param;
    }
}
