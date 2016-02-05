<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 15:32
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\PayParam;

class Api
{
    public function pay(Config $config, PayParam $pay_param)
    {
        $submit = new Submit($config);
        return $submit->buildRequestForm($pay_param, 'get', '确认');
    }
}
