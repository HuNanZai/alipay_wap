<?php
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Param;

/**
 * Class CallbackParam
 *
 * 参考文档：https://doc.open.alipay.com/doc2/detail.htm?spm=0.0.0.0.3VRy9k&treeId=60&articleId=103694&docType=1
 *
 * @package HuNanZai\Component\Pay\Package\Alipay_wap\Param
 */
class CallbackParam extends BaseParam
{
    /**
     * 成功标识(表示接口调用是否成功，并不表明业务处理结果。)
     *
     * @param mixed $is_success
     */
    public function setIsSuccess($is_success)
    {
        $this->params['is_success'] = $is_success;
    }

    /**
     * 签名方式(DSA、RSA、MD5三个值可选，必须大写。)
     *
     * @param mixed $sign_type
     */
    public function setSignType($sign_type)
    {
        $this->params['sign_type'] = $sign_type;
    }

    /**
     * 签名
     *
     * @param mixed $sign
     */
    public function setSign($sign)
    {
        $this->params['sign'] = $sign;
    }

    /**
     * [可空]接口名称
     *
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->params['service'] = $service;
    }

    /**
     * [可空]通知校验ID
     *
     * @param mixed $notify_id
     */
    public function setNotifyId($notify_id)
    {
        $this->params['notify_id'] = $notify_id;
    }

    /**
     * [可空]通知时间
     *
     * @param mixed $notify_time
     */
    public function setNotifyTime($notify_time)
    {
        $this->params['notify_time'] = $notify_time;
    }

    /**
     * [可空]通知类型
     *
     * @param mixed $notify_type
     */
    public function setNotifyType($notify_type)
    {
        $this->params['notify_type'] = $notify_type;
    }

    /**
     * [可空]商户网站唯一订单号
     *
     * @param mixed $out_trade_no
     */
    public function setOutTradeNo($out_trade_no)
    {
        $this->params['out_trade_no'] = $out_trade_no;
    }

    /**
     * [可空]支付宝交易号
     *
     * @param mixed $trade_no
     */
    public function setTradeNo($trade_no)
    {
        $this->params['trade_no'] = $trade_no;
    }

    /**
     * [可空]商品名称
     *
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->params['subject'] = $subject;
    }

    /**
     * [可空]支付类型
     *
     * @param mixed $payment_type
     */
    public function setPaymentType($payment_type)
    {
        $this->params['payment_type'] = $payment_type;
    }

    /**
     * [可空]交易状态
     *
     * @param mixed $trade_status
     */
    public function setTradeStatus($trade_status)
    {
        $this->params['trade_status'] = $trade_status;
    }

    /**
     * [可空]卖家支付宝账户号
     *
     * @param mixed $seller_id
     */
    public function setSellerId($seller_id)
    {
        $this->params['seller_id'] = $seller_id;
    }

    /**
     * [可空]交易金额
     *
     * @param mixed $total_fee
     */
    public function setTotalFee($total_fee)
    {
        $this->params['total_fee'] = $total_fee;
    }

    /**
     * [可空]商品描述
     *
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->params['body'] = $body;
    }
}
