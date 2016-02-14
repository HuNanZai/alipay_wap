<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 8:57
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Param;

class NotifyParam extends BaseParam
{
    /**
     * 获取通知校验id
     *
     * @return mixed
     */
    public function getNotifyId()
    {
        return $this->params['notify_id'];
    }

    /**
     * 获取签名
     *
     * @return mixed
     */
    public function getSign()
    {
        return $this->params['sign'];
    }

    /**
     * 设置通知校验id
     *
     * @param $notify_id
     */
    public function setNotifyId($notify_id)
    {
        $this->params['notify_id']  = $notify_id;
    }

    /**
     * 设置通知校验类型
     *
     * @param $notify_type
     */
    public function setNotifyType($notify_type)
    {
        $this->params['notify_type']    = $notify_type;
    }

    /**
     * 设置通知校验时间
     *
     * @param $notify_time
     */
    public function setNotifyTime($notify_time)
    {
        $this->params['notify_time']    = $notify_time;
    }

    /**
     * [可空]商户网站唯一订单号
     *
     * @param $out_trade_no
     */
    public function setOutTradeNo($out_trade_no)
    {
        $this->params['out_trade_no']   = $out_trade_no;
    }

    /**
     * [可空]商品名称/交易标题
     *
     * @param $subject
     */
    public function setSubject($subject)
    {
        $this->params['subject']    = $subject;
    }

    /**
     * [可空]支付类型
     *
     * @param $payment_type
     */
    public function setPaymentType($payment_type)
    {
        $this->params['payment_type']   = $payment_type;
    }

    /**
     * [可空]支付宝交易号
     *
     * @param $trade_no
     */
    public function setTradeNo($trade_no)
    {
        $this->params['trade_no']   = $trade_no;
    }

    /**
     * [可空]交易状态
     *
     * @param $trade_status
     */
    public function setTradeStatus($trade_status)
    {
        $this->params['trade_status']   = $trade_status;
    }

    /**
     * [可空]交易创建时间
     *
     * @param $gmt_create
     */
    public function setGmtCreate($gmt_create)
    {
        $this->params['gmt_create']   = $gmt_create;
    }

    /**
     * [可空]交易付款时间
     *
     * @param $gmt_payment
     */
    public function setGmtPayment($gmt_payment)
    {
        $this->params['gmt_payment']   = $gmt_payment;
    }

    /**
     * [可空]交易关闭时间
     *
     * @param $gmt_close
     */
    public function setGmtClose($gmt_close)
    {
        $this->params['gmt_close']   = $gmt_close;
    }

    /**
     * [可空]卖家支付宝账号
     *
     * @param $seller_email
     */
    public function setSellerEmail($seller_email)
    {
        $this->params['seller_email']   = $seller_email;
    }

    /**
     * [可空]买家支付宝账号
     *
     * @param $buyer_email
     */
    public function setBuyerEmail($buyer_email)
    {
        $this->params['buyer_email']   = $buyer_email;
    }

    /**
     * [可空]卖家支付宝账户号
     *
     * @param $seller_id
     */
    public function setSellerId($seller_id)
    {
        $this->params['seller_id']   = $seller_id;
    }

    /**
     * [可空]买家支付宝账户号
     *
     * @param $buyer_id
     */
    public function setBuyerId($buyer_id)
    {
        $this->params['buyer_id']   = $buyer_id;
    }

    /**
     * [可空]商品单价
     *
     * @param $price
     */
    public function setPrice($price)
    {
        $this->params['price']   = $price;
    }

    /**
     * [可空]交易金额
     *
     * @param $total_fee
     */
    public function setTotalFee($total_fee)
    {
        $this->params['total_fee']   = $total_fee;
    }

    /**
     * [可空]购买数量
     *
     * @param $quantity
     */
    public function setQuantity($quantity)
    {
        $this->params['quantity']   = $quantity;
    }

    /**
     * [可空]商品描述
     *
     * @param $body
     */
    public function setBody($body)
    {
        $this->params['body']   = $body;
    }

    /**
     * [可空]折扣
     *
     * @param $discount
     */
    public function setDiscount($discount)
    {
        $this->params['discount']   = $discount;
    }

    /**
     * [可空]是否调整总价
     *
     * @param $is_total_fee_adjust
     */
    public function setIsTotalFeeAdjust($is_total_fee_adjust)
    {
        $this->params['is_total_fee_adjust']   = $is_total_fee_adjust;
    }

    /**
     * [可空]是否使用红包买家
     *
     * @param $use_coupon
     */
    public function setUseCoupon($use_coupon)
    {
        $this->params['use_coupon']   = $use_coupon;
    }

    /**
     * [可空]退款状态
     *
     * @param $refund_status
     */
    public function setRefundStatus($refund_status)
    {
        $this->params['refund_status']   = $refund_status;
    }

    /**
     * [可空]退款时间
     *
     * @param $gmt_refund
     */
    public function setGmtRefund($gmt_refund)
    {
        $this->params['gmt_refund']   = $gmt_refund;
    }
}
