<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 15:32
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\NotifyParam;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\PayParam;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\RefundParam;

class Api
{
    public function pay(Config $config, PayParam $pay_param)
    {
        $submit = new Submit($config);
        return $submit->buildRequestForm($pay_param, 'get', '确认');
    }

    public function verifyNotify(Config $config, NotifyParam $notify_param)
    {
        $notify = new Notify($config);
        return $notify->verifyNotify($notify_param);
    }

    public function verifyCallback(Config $config, NotifyParam $callback_param)
    {
        $notify = new Notify($config);
        return $notify->verifyReturn($callback_param);
    }

    public function refund(Config $config, RefundParam $refund_param)
    {
        $submit = new Submit($config);
        return $submit->buildRequestForm($refund_param, 'get', '确认');
    }
}
