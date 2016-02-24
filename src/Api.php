<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 15:32
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\CallbackParam;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\NotifyParam;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\PayParam;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\RefundParam;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\SearchRequestParam;

class Api
{
    /**
     * @var Config
     */
    private $config = null;

    public function __construct(Config $config)
    {
        $this->config   = $config;
    }

    public function pay(PayParam $pay_param)
    {
        $submit = new Submit($this->config);

        //将配置中的关键参数加入到这边
        $pay_param->setSellerId($this->config->seller_id);
        $pay_param->setPartner($this->config->partner);
        $pay_param->setInputCharset($this->config->input_charset);
        $pay_param->setSignType($this->config->sign_type);

        return $submit->buildRequestForm($pay_param, 'get', '确认');
    }

    public function verifyNotify(NotifyParam $notify_param)
    {
        $notify = new Notify($this->config);
        return $notify->verifyNotify($notify_param);
    }

    public function verifyCallback(CallbackParam $callback_param)
    {
        $notify = new Notify($this->config);
        return $notify->verifyReturn($callback_param);
    }

    public function refund(RefundParam $refund_param)
    {
        $submit = new Submit($this->config);
        return $submit->buildRequestForm($refund_param, 'get', '确认');
    }

    public function search(SearchRequestParam $search_param)
    {
        $submit = new Submit($this->config);
        return $submit->buildRequestHttp($search_param);
    }
}
