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
use HuNanZai\Component\Log\Service as Logger;

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
        $this->config = $config;
    }

    /**
     * 验证通知返回
     *
     * @param NotifyParam $notify_param
     *
     * @return bool
     */
    public function verifyNotify(NotifyParam $notify_param)
    {
        $params = $notify_param->getParams();
        if (empty($params)) {
            return false;
        }
        //生成签名结果
        $isSign = $this->getSignVerify($notify_param, $notify_param->getSign());
        //获取支付宝服务器远程atn结果
        $responseTxt    = 'false';
        $notify_id  = $notify_param->getNotifyId();
        if (!empty($notify_id)) {
            $responseTxt    = $this->getResponse($notify_param->getNotifyId());
        }

        Logger::addInfo('alipay_wap_notify', 'verifyNotify', array(
            'param'         => (string) $notify_param,
            'isSign'        => $isSign,
            'responseTxt'   => $responseTxt,
        ));
        //验证
        //$responsetTxt的结果不是true，与服务器设置问题、合作身份者ID、notify_id一分钟失效有关
        //isSign的结果不是true，与安全校验码、请求时的参数格式（如：带自定义参数等）、编码格式有关
        if (preg_match("/true$/i", $responseTxt) && $isSign) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 验证同步返回结果是否来自支付宝
     *
     * @param NotifyParam $notify_param
     *
     * @return bool
     */
    public function verifyReturn(NotifyParam $notify_param)
    {
        $params = $notify_param->getParams();
        if (empty($params)) {
            return false;
        }
        $isSign = $this->getSignVerify($notify_param, $notify_param->getSign());
        $responseTxt    = 'false';
        $notify_id  = $notify_param->getNotifyId();
        if (!empty($notify_id)) {
            $responseTxt    = $this->getResponse($notify_param->getNotifyId());
        }

        Logger::addInfo('alipay_wap_notify', 'verifyReturn', array(
            'param'         => (string) $notify_param,
            'isSign'        => $isSign,
            'responseTxt'   => $responseTxt,
        ));

        if (preg_match("/true$/i", $responseTxt) && $isSign) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 获取返回时签名验证结果
     *
     * @param NotifyParam $param
     * @param             $sign
     *
     * @return bool
     */
    public function getSignVerify(NotifyParam $param, $sign)
    {
        $param->filter();
        $param->sort();
        $param_str  = $param->getParamString();

        $isSign = EncryptionFactory::create($this->config)->verify($param_str, $sign);

        return $isSign;
    }

    public function getResponse($notify_id)
    {
        $transport  = strtolower(trim($this->config->transport));
        $partner    = trim($this->config->partner);
        $verify_url = $transport=='https' ? $this->https_verify_url : $this->http_verify_url;

        $verify_url .= "partner={$partner}&notify_id={$notify_id}";
        $response   = \Requests::get($verify_url, array(), array('verify'=>$this->config->cacert));

        Logger::addInfo('alipay_wap_notify', 'getResponse', array(
            'notify_id' => $notify_id,
            'transport' => $transport,
            'verify_url'    => $verify_url,
            'result'    => $response->body,
        ));

        return $response->body;
    }
}
