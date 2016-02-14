<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 10:29
 */

namespace HuNanZai\Component\Pay\Package\Alipay_wap\Encryption;

interface IEncryption
{
    public function verify($data, $sign);
    public function sign($data);
}