<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 14:47
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap;

use HuNanZai\Component\Log\Service as Logger;
use HuNanZai\Component\Pay\Package\Alipay_wap\Factory\EncryptionFactory;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\BaseParam;

class Submit
{
    /**
     * @var Config
     */
    public $config = null; //支付宝的配置
    public $gateway = 'https://mapi.alipay.com/gateway.do?';

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function buildRequestForm(BaseParam $para, $method, $button_name)
    {
        $param_array = $this->buildParam($para);

        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='" . $this->gateway . "_input_charset=" . trim(strtolower($this->config->input_charset)) . "' method='" . $method . "'>";
        while (list ($key, $val) = each($param_array)) {
            $sHtml .= "<input type='hidden' name='" . $key . "' value='" . $val . "'/>";
        }

        //submit按钮控件请不要含有name属性
        $sHtml = $sHtml . "<input type='submit' value='" . $button_name . "'></form>";

        $sHtml = $sHtml . "<script>document.forms['alipaysubmit'].submit();</script>";

        Logger::addInfo('alipay_wap_submit', 'buildRequestForm', array(
            'param_array'   => $param_array,
            'method'        => $method,
            'html'          => $sHtml,
        ));

        return $sHtml;
    }

    public function buildRequestHttp(BaseParam $param)
    {
        $request_data = $this->buildParam($param);

        $result = self::getHttpResponse('post', $this->gateway, $this->config->cacert, $request_data, $this->config->input_charset);
        return $result;
    }

    public function buildParam(BaseParam $param, $result_type = 'array')
    {
        $param->filter();
        $param->sort();

        $param->setSign(EncryptionFactory::create($this->config)->sign($param->getParamString()));
        $param->setSignType($this->config->sign_type);

        if ($result_type == 'array') {
            return $param->getParams();
        } else {
            return $param->getParamString();
        }
    }

    /**
     * 获取post方法的返回值
     *
     * @param        $url
     * @param        $cacert
     * @param        $para
     * @param string $input_charset
     *
     * @return string
     */
    public static function getHttpResponse($method, $url, $cacert, $para, $input_charset = '')
    {
        if (trim($input_charset) != '') {
            $url = $url . "_input_charset=" . $input_charset;
        }

        if ($method == 'post') {
            $result = \Requests::post($url, array(), $para, array('verify' => $cacert));
        } else {
            $result = \Requests::get($url, array(), array('verify' => $cacert));
        }

        Logger::addInfo('alipay_wap_submit', 'getHttpResponse', array(
            'method' => $method,
            'url'    => $url,
            'cacert' => $cacert,
            'para'   => $para,
            'result' => $result->body,
        ));

        return $result->body;
    }
}
