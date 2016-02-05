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
    public $private_key_path    = '';   //商户私钥
    public $public_key_path     = '';   //支付宝共钥

    public $sign_type       = 'RSA';    //签名方式
    public $input_charset   = 'utf-8';  //字符编码格式
    public $cacert          = '';       //ca证书，用于curl的ssl校验
    public $transport       = 'http';   //访问模式
}
