<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 10:44
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Param;

class BaseParam
{
    /**
     * @var array 请求的参数数组
     */
    protected $params = null;

    public function filter()
    {
        foreach ($this->params as $key => $val) {
            if ($key == "sign" || $key == "sign_type" || $val == "") {
                unset($this->params[$key]);
            }
        }
    }

    public function sort()
    {
        ksort($this->params);
        reset($this->params);
    }

    public function getParamString()
    {
        $param_string = '';
        foreach ($this->params as $key => $val) {
            $param_string .= "{$key}={$val}&";
        }
        //去掉最后一个&
        $param_string = substr($param_string, 0, count($param_string)-2);

        return $param_string;
    }

    public function getParamStringUrlEncode()
    {
        return http_build_query($this->params);
    }

    public function getParams()
    {
        return $this->params;
    }

    /**
     * 签名方式
     *
     * @param $sign_type
     */
    public function setSignType($sign_type)
    {
        $this->params['sign_type']  = $sign_type;
    }

    /**
     * 签名
     *
     * @param $sign
     */
    public function setSign($sign)
    {
        $this->params['sign']   = $sign;
    }

    public function __toString()
    {
        return json_encode($this->params);
    }
}
