<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 14:27
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Encryption;

use HuNanZai\Component\Log\Service as Logger;

class RsaEncryption
{
    private $private_key_path = null; //商户私钥文件路径
    private $public_key_path = null; //支付宝共钥文件路径

    public function __construct($private_key_path, $public_key_path)
    {
        if (!file_exists($private_key_path) || !file_exists($public_key_path)) {
            throw new \Exception("key file not exist:{$private_key_path} {$public_key_path}");
        }

        $this->private_key_path = $private_key_path;
        $this->public_key_path  = $public_key_path;

        Logger::addInfo('alipay_wap_encryption_rsa', 'load two key path', array(
            'private_key_path' => $private_key_path,
            'public_key_path'  => $public_key_path,
        ));
    }

    public function sign($data)
    {
        $key = file_get_contents($this->private_key_path);
        $res = openssl_get_privatekey($key);

        openssl_sign($data, $sign, $res);
        openssl_free_key($res);

        $sign = base64_encode($sign);

        Logger::addInfo('alipay_wap_encryption_rsa', 'sign', array(
            'openssl_key' => $res,
            'sign'        => $sign,
        ));

        return $sign;
    }

    public function verify($data, $sign)
    {
        $key = file_get_contents($this->public_key_path);
        $res = openssl_get_publickey($key);

        $result = (bool)openssl_verify($data, base64_decode($sign), $res);
        openssl_free_key($res);

        Logger::addInfo('alipay_wap_encryption_rsa', 'verify', array(
            'openssl_key' => $res,
            'result'      => $result,
        ));

        return $result;
    }

    public function decrypt($content)
    {
        $key = file_get_contents($this->private_key_path);
        $res = openssl_get_privatekey($key);

        $content = base64_decode($content);

        $result = '';
        for ($i = 0; $i < strlen($content) / 128; $i++) {
            $data = substr($content, $i * 128, 128);
            openssl_private_decrypt($data, $decrypt, $res);
            $result .= $decrypt;
        }
        openssl_free_key($res);

        Logger::addInfo('alipay_wap_encryption_rsa', 'decrypt', array(
            'key'       => $res,
            'result'    => $result,
        ));

        return $result;
    }
}
