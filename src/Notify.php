<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 14:47
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap;

class Notify
{
    /**
     * @var Config
     */
    public $config = null; //支付宝的配置

    /**
     * HTTPS形式消息验证地址
     */
    public $https_verify_url = 'https://mapi.alipay.com/gateway.do?service=notify_verify&';
    /**
     * HTTP形式消息验证地址
     */
    public $http_verify_url = 'http://notify.alipay.com/trade/notify_query.do?';

    public function __construct(Config $config)
    {
        $this->config;
    }


}
