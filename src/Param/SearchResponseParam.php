<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/25
 * Time: 15:55
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Param;

class SearchResponseParam extends BaseParam
{
    /**
     * @return string
     */
    public function getIsSuccess()
    {
        return $this->params['is_success'];
    }

    /**
     * 请求是否成功(T:成功 F:失败)
     *
     * @param mixed $is_success
     */
    public function setIsSuccess($is_success)
    {
        $this->params['is_success'] = $is_success;
    }

    /**
     * @return mixed
     */
    public function getSign()
    {
        return $this->params['sign'];
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
     * @return mixed
     */
    public function getSignType()
    {
        return $this->params['sign_type'];
    }

    /**
     * 签名方式(只支持DSA,RSA,MD5)
     *
     * @param mixed $sign_type
     */
    public function setSignType($sign_type)
    {
        $this->params['sign_type'] = $sign_type;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->params['error'];
    }

    /**
     * [可空]查询交易信息失败的错误代码
     *
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->params['error'] = $error;
    }

    /**
     * @return mixed
     */
    public function getBuyerEmail()
    {
        return $this->params['buyer_email'];
    }

    /**
     * 买家支付宝账号
     *
     * @param mixed $buyer_email
     */
    public function setBuyerEmail($buyer_email)
    {
        $this->params['buyer_email'] = $buyer_email;
    }

    /**
     * @return mixed
     */
    public function getBuyerId()
    {
        return $this->params['buyer_id'];
    }

    /**
     * 买家支付宝账号对应支付宝的唯一用户号
     *
     * @param mixed $buyer_id
     */
    public function setBuyerId($buyer_id)
    {
        $this->params['buyer_id'] = $buyer_id;
    }

    /**
     * @return mixed
     */
    public function getTradeStatus()
    {
        return $this->params['trade_status'];
    }

    /**
     * 交易状态(取值范围参见目录)
     *
     * @param mixed $trade_status
     */
    public function setTradeStatus($trade_status)
    {
        $this->params['trade_status'] = $trade_status;
    }

    /**
     * @return mixed
     */
    public function getIsTotalFeeAdjust()
    {
        return $this->params['is_total_fee_adjust'];
    }

    /**
     * 交易金额是否调整过(T:有调整 F:没有调整)
     *
     * @param mixed $is_total_fee_adjust
     */
    public function setIsTotalFeeAdjust($is_total_fee_adjust)
    {
        $this->params['is_total_fee_adjust'] = $is_total_fee_adjust;
    }

    /**
     * @return mixed
     */
    public function getOutTradeNo()
    {
        return $this->params['out_trade_no'];
    }

    /**
     * [可空]商户订单号
     *
     * @param mixed $out_trade_no
     */
    public function setOutTradeNo($out_trade_no)
    {
        $this->params['out_trade_no'] = $out_trade_no;
    }

    /**
     * @return mixed
     */
    public function getTradeNo()
    {
        return $this->params['trade_no'];
    }

    /**
     * 支付宝交易号(String16~64)
     *
     * @param mixed $trade_no
     */
    public function setTradeNo($trade_no)
    {
        $this->params['trade_no'] = $trade_no;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->params['subject'];
    }

    /**
     * 商品名称
     *
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->params['subject'] = $subject;
    }

    /**
     * @return mixed
     */
    public function getFlagTradeLocked()
    {
        return $this->params['flag_trade_locked'];
    }

    /**
     * 交易冻结状态(1 冻结， 0 未冻结)
     *
     * @param mixed $flag_trade_locked
     */
    public function setFlagTradeLocked($flag_trade_locked)
    {
        $this->params['flag_trade_locked'] = $flag_trade_locked;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->params['body'];
    }

    /**
     * 商品描述
     *
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->params['body'] = $body;
    }

    /**
     * @return mixed
     */
    public function getGmtCreate()
    {
        return $this->params['gmt_create'];
    }

    /**
     * 交易创建时间（Y-m-d H:i:s）
     *
     * @param mixed $gmt_create
     */
    public function setGmtCreate($gmt_create)
    {
        $this->params['gmt_create'] = $gmt_create;
    }

    /**
     * @return mixed
     */
    public function getSellerEmail()
    {
        return $this->params['seller_email'];
    }

    /**
     * 卖家支付宝账号
     *
     * @param mixed $seller_email
     */
    public function setSellerEmail($seller_email)
    {
        $this->params['seller_email'] = $seller_email;
    }

    /**
     * @return mixed
     */
    public function getSellerId()
    {
        return $this->params['seller_id'];
    }

    /**
     * 卖家支付宝账号对应的支付宝唯一用户id（2088开头纯16位数字）
     *
     * @param mixed $seller_id
     */
    public function setSellerId($seller_id)
    {
        $this->params['seller_id'] = $seller_id;
    }

    /**
     * @return mixed
     */
    public function getTotalFee()
    {
        return $this->params['total_fee'];
    }

    /**
     * 交易总金额（0.01~100万）
     *
     * @param mixed $total_fee
     */
    public function setTotalFee($total_fee)
    {
        $this->params['total_fee'] = $total_fee;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->params['price'];
    }

    /**
     * [可空]商品单价(0.01~100万)
     *
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->params['price'] = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->params['quantity'];
    }

    /**
     * [可空]购买数量
     *
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->params['quantity'] = $quantity;
    }

    /**
     * @return mixed
     */
    public function getLogisticsFee()
    {
        return $this->params['logistics_fee'];
    }

    /**
     * [可空]邮费
     *
     * @param mixed $logistics_fee
     */
    public function setLogisticsFee($logistics_fee)
    {
        $this->params['logistics_fee'] = $logistics_fee;
    }

    /**
     * @return mixed
     */
    public function getCouponDiscount()
    {
        return $this->params['coupon_discount'];
    }

    /**
     * [可空]红包折扣
     *
     * @param mixed $coupon_discount
     */
    public function setCouponDiscount($coupon_discount)
    {
        $this->params['coupon_discount'] = $coupon_discount;
    }

    /**
     * @return mixed
     */
    public function getUseCoupon()
    {
        return $this->params['use_coupon'];
    }

    /**
     * [可空]是否使用过红包(T:使用过 F:未使用过)
     *
     * @param mixed $use_coupon
     */
    public function setUseCoupon($use_coupon)
    {
        $this->params['use_coupon'] = $use_coupon;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->params['discount'];
    }

    /**
     * [可空]折扣
     *
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->params['discount'] = $discount;
    }

    /**
     * @return mixed
     */
    public function getRefundStatus()
    {
        return $this->params['refund_status'];
    }

    /**
     * [可空]退款状态(取值范围参加附录)
     *
     * @param mixed $refund_status
     */
    public function setRefundStatus($refund_status)
    {
        $this->params['refund_status'] = $refund_status;
    }

    /**
     * @return mixed
     */
    public function getLogisticsStatus()
    {
        return $this->params['logistics_status'];
    }

    /**
     * [可空]物流状态
     *
     * @param mixed $logistics_status
     */
    public function setLogisticsStatus($logistics_status)
    {
        $this->params['logistics_status'] = $logistics_status;
    }

    /**
     * @return mixed
     */
    public function getAdditionalTradeStatus()
    {
        return $this->params['additional_trade_status'];
    }

    /**
     * [可空]交易附加状态
     *
     * @param mixed $additional_trade_status
     */
    public function setAdditionalTradeStatus($additional_trade_status)
    {
        $this->params['additional_trade_status'] = $additional_trade_status;
    }

    /**
     * @return mixed
     */
    public function getGmtLastModifiedTime()
    {
        return $this->params['gmt_last_modified_time'];
    }

    /**
     * [可空]交易最近一次修改时间
     *
     * @param mixed $gmt_last_modified_time
     */
    public function setGmtLastModifiedTime($gmt_last_modified_time)
    {
        $this->params['gmt_last_modified_time'] = $gmt_last_modified_time;
    }

    /**
     * @return mixed
     */
    public function getGmtPayment()
    {
        return $this->params['gmt_payment'];
    }

    /**
     * [可空]付款时间
     *
     * @param mixed $gmt_payment
     */
    public function setGmtPayment($gmt_payment)
    {
        $this->params['gmt_payment'] = $gmt_payment;
    }

    /**
     * @return mixed
     */
    public function getGmtSendGoods()
    {
        return $this->params['gmt_send_goods'];
    }

    /**
     * [可空]卖家发货时间
     *
     * @param mixed $gmt_send_goods
     */
    public function setGmtSendGoods($gmt_send_goods)
    {
        $this->params['gmt_send_goods'] = $gmt_send_goods;
    }

    /**
     * @return mixed
     */
    public function getGmtRefund()
    {
        return $this->params['gmt_refund'];
    }

    /**
     * [可空]退款时间
     *
     * @param mixed $gmt_refund
     */
    public function setGmtRefund($gmt_refund)
    {
        $this->params['gmt_refund'] = $gmt_refund;
    }

    /**
     * @return mixed
     */
    public function getTimeOut()
    {
        return $this->params['time_out'];
    }

    /**
     * [可空]主超时时间
     *
     * @param mixed $time_out
     */
    public function setTimeOut($time_out)
    {
        $this->params['time_out'] = $time_out;
    }

    /**
     * @return mixed
     */
    public function getGmtClose()
    {
        return $this->params['gmt_close'];
    }

    /**
     * [可空]交易关闭时间
     *
     * @param mixed $gmt_close
     */
    public function setGmtClose($gmt_close)
    {
        $this->params['gmt_close'] = $gmt_close;
    }

    /**
     * @return mixed
     */
    public function getGmtLogisticsModify()
    {
        return $this->params['gmt_logistics_modify'];
    }

    /**
     * [可空]物流状态更新时间
     *
     * @param mixed $gmt_logistics_modify
     */
    public function setGmtLogisticsModify($gmt_logistics_modify)
    {
        $this->params['gmt_logistics_modify'] = $gmt_logistics_modify;
    }

    /**
     * @return mixed
     */
    public function getTimeOutType()
    {
        return $this->params['time_out_type'];
    }

    /**
     * [可空]主超时时间类型
     *
     * @param mixed $time_out_type
     */
    public function setTimeOutType($time_out_type)
    {
        $this->params['time_out_type'] = $time_out_type;
    }

    /**
     * @return mixed
     */
    public function getRefundFee()
    {
        return $this->params['refund_fee'];
    }

    /**
     * [可空]退款金额
     *
     * @param mixed $refund_fee
     */
    public function setRefundFee($refund_fee)
    {
        $this->params['refund_fee'] = $refund_fee;
    }

    /**
     * @return mixed
     */
    public function getRefundFlowType()
    {
        return $this->params['refund_flow_type'];
    }

    /**
     * [可空]退款流程
     *
     * @param mixed $refund_flow_type
     */
    public function setRefundFlowType($refund_flow_type)
    {
        $this->params['refund_flow_type'] = $refund_flow_type;
    }

    /**
     * @return mixed
     */
    public function getRefundId()
    {
        return $this->params['refund_id'];
    }

    /**
     * [可空]退款id
     *
     * @param mixed $refund_id
     */
    public function setRefundId($refund_id)
    {
        $this->params['refund_id'] = $refund_id;
    }

    /**
     * @return mixed
     */
    public function getRefundCashFee()
    {
        return $this->params['refund_cash_fee'];
    }

    /**
     * [可空]退现金金额
     *
     * @param mixed $refund_cash_fee
     */
    public function setRefundCashFee($refund_cash_fee)
    {
        $this->params['refund_cash_fee'] = $refund_cash_fee;
    }

    /**
     * @return mixed
     */
    public function getRefundCouponFee()
    {
        return $this->params['refund_coupon_fee'];
    }

    /**
     * [可空]退红包金额
     *
     * @param mixed $refund_coupon_fee
     */
    public function setRefundCouponFee($refund_coupon_fee)
    {
        $this->params['refund_coupon_fee'] = $refund_coupon_fee;
    }

    /**
     * @return mixed
     */
    public function getRefundAgentPayFee()
    {
        return $this->params['refund_agent_pay_fee'];
    }

    /**
     * [可空]退积分金额
     *
     * @param mixed $refund_agent_pay_fee
     */
    public function setRefundAgentPayFee($refund_agent_pay_fee)
    {
        $this->params['refund_agent_pay_fee'] = $refund_agent_pay_fee;
    }

    /**
     * @return mixed
     */
    public function getCouponUsedFee()
    {
        return $this->params['coupon_used_fee'];
    }

    /**
     * [可空]使用红包金额
     *
     * @param mixed $coupon_used_fee
     */
    public function setCouponUsedFee($coupon_used_fee)
    {
        $this->params['coupon_used_fee'] = $coupon_used_fee;
    }

    /**
     * @return mixed
     */
    public function getToBuyerFee()
    {
        return $this->params['to_buyer_fee'];
    }

    /**
     * [可空]累积已经退款的金额
     *
     * @param mixed $to_buyer_fee
     */
    public function setToBuyerFee($to_buyer_fee)
    {
        $this->params['to_buyer_fee'] = $to_buyer_fee;
    }

    /**
     * @return mixed
     */
    public function getToSellerFee()
    {
        return $this->params['to_seller_fee'];
    }

    /**
     * [可空]累计已打款给卖家的金额
     *
     * @param mixed $to_seller_fee
     */
    public function setToSellerFee($to_seller_fee)
    {
        $this->params['to_seller_fee'] = $to_seller_fee;
    }

    /**
     * @return mixed
     */
    public function getFundBillList()
    {
        return $this->params['fund_bill_list'];
    }

    /**
     * [可空]资金单据列表
     *
     * @param mixed $fund_bill_list
     */
    public function setFundBillList($fund_bill_list)
    {
        $this->params['fund_bill_list'] = $fund_bill_list;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->params['payment_type'];
    }

    /**
     * [可空]收款类型
     *
     * @param mixed $payment_type
     */
    public function setPaymentType($payment_type)
    {
        $this->params['payment_type'] = $payment_type;
    }

    /**
     * @return mixed
     */
    public function getOperatorRole()
    {
        return $this->params['operator_role'];
    }

    /**
     * [可空]交易的创建人角色
     *
     * @param mixed $operator_role
     */
    public function setOperatorRole($operator_role)
    {
        $this->params['operator_role'] = $operator_role;
    }
}
