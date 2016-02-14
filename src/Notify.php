<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 14:47
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap;

use HuNanZai\Component\Pay\Package\Alipay_wap\Factory\EncryptionFactory;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\NotifyParam;

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

    public function verifyNotify(NotifyParam $notify_param)
    {
        if (empty($notify_param->getParams())) {
            return false;
        }

    }

    public function getSignVerify(NotifyParam $param, $sign)
    {
        $param->filter();
        $param->sort();
        $param_str  = $param->getParamString();

        $isSign = false;
        $isSign = EncryptionFactory::create($this->config)->verify($param_str, $sign);

        $responseTxt = 'false';
        if (!empty($param->getNotifyId())) {
            //获取支付宝远程服务器atn结果(验证是否支付宝发来的消息)
            $responseTxt = null;
        }

        if (preg_match("/true$/i", $responseTxt) && $isSign) {
            return true;
        } else {
            return false;
        }
    }
}
