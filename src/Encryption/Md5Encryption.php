<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/25
 * Time: 14:32
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Encryption;

use HuNanZai\Component\Pay\Package\Alipay_wap\Exception\InvalidParamException;
use HuNanZai\Component\Log\Service as Logger;

class Md5Encryption implements IEncryption
{
    /**
     * @var string 商户的安全校验码（32位数字字母混合字符串）
     */
    private $key    = null;

    public function __construct($key)
    {
        if (strlen($key) != 32) {
            throw new InvalidParamException('32 length string', var_export($key, 1));
        }
        $this->key = $key;
    }

    /**
     * @param $data
     * @param $sign
     *
     * @return bool
     */
    public function verify($data, $sign)
    {
        $result = $sign == md5($data.$this->key) ? true : false;

        Logger::addInfo('alipay_wap_encryption_md5', 'verify', array(
            'data'  => $data,
            'key'   => $this->key,
            'sign'  => $sign,
            'res'   => $result,
        ));

        return $result;
    }

    /**
     * @param $data
     *
     * @return string
     */
    public function sign($data)
    {
        $sign = md5($data.$this->key);

        Logger::addInfo('alipay_wap_encryption_md5', 'sign', array(
            'data'  => $data,
            'key'   => $this->key,
            'sign'  => $sign,
        ));

        return $sign;
    }
}
