<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 13:54
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap;

class Config
{
    public $partner     = '';   //合作者身份id
    public $seller_id   = '';   //收款支付宝账号
    public $key         = '';   //商户安全校验码（用于md5加密）
    public $private_key_path    = '';   //商户私钥（用于rsa加密）
    public $public_key_path     = '';   //支付宝共钥（用于rsa加密）

    public $sign_type       = 'RSA';    //签名方式
    public $input_charset   = 'utf-8';  //字符编码格式
    public $cacert          = '';       //ca证书，用于curl的ssl校验
    public $transport       = 'http';

    /**
     * @return string
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * @param string $partner
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;
    }

    /**
     * @return string
     */
    public function getSellerId()
    {
        return $this->seller_id;
    }

    /**
     * @param string $seller_id
     */
    public function setSellerId($seller_id)
    {
        $this->seller_id = $seller_id;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getPrivateKeyPath()
    {
        return $this->private_key_path;
    }

    /**
     * @param string $private_key_path
     */
    public function setPrivateKeyPath($private_key_path)
    {
        $this->private_key_path = $private_key_path;
    }

    /**
     * @return string
     */
    public function getPublicKeyPath()
    {
        return $this->public_key_path;
    }

    /**
     * @param string $public_key_path
     */
    public function setPublicKeyPath($public_key_path)
    {
        $this->public_key_path = $public_key_path;
    }

    /**
     * @return string
     */
    public function getSignType()
    {
        return $this->sign_type;
    }

    /**
     * @param string $sign_type
     */
    public function setSignType($sign_type)
    {
        $this->sign_type = $sign_type;
    }

    /**
     * @return string
     */
    public function getInputCharset()
    {
        return $this->input_charset;
    }

    /**
     * @param string $input_charset
     */
    public function setInputCharset($input_charset)
    {
        $this->input_charset = $input_charset;
    }

    /**
     * @return string
     */
    public function getCacert()
    {
        return $this->cacert;
    }

    /**
     * @param string $cacert
     */
    public function setCacert($cacert)
    {
        $this->cacert = $cacert;
    }

    /**
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param string $transport
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
    }
}
