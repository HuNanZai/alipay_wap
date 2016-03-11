<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 15:06
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Param;

/**
 * Class RefundParam
 *
 * 参数文档参考至：https://doc.open.alipay.com/doc2/detail.htm?spm=0.0.0.0.EC1cx3&treeId=66&articleId=103600&docType=1
 *
 * @package HuNanZai\Component\Pay\Package\Alipay_wap\Param
 */
class RefundParam extends BaseParam
{
    public function __construct()
    {
        $this->setDefaultService();
    }

    /**
     * 设置默认的服务
     */
    public function setDefaultService()
    {
        $this->params['service']    = 'refund_fastpay_by_platform_pwd';
    }

    /**
     * 设置合作者身份id
     *
     * @param $partner
     */
    public function setPartner($partner)
    {
        $this->params['partner']    = $partner;
    }

    /**
     * 编码格式
     *
     * @param $input_charset
     */
    public function setInputCharset($input_charset)
    {
        $this->params['_input_charset'] = $input_charset;
    }

    /**
     * 设置卖家的邮箱账号(如果指定了卖家id 可以不填写卖家用户id)
     *
     * @param $seller_email
     */
    public function setSellerEmail($seller_email)
    {
        $this->params['seller_email']   = $seller_email;
    }

    /**
     * 设置卖家的用户id
     *
     * @param $seller_user_id
     */
    public function setSellerUserId($seller_user_id)
    {
        $this->params['seller_user_id']   = $seller_user_id;
    }

    /**
     * 退款请求时间
     *
     * @param $refund_date
     */
    public function setRefundDate($refund_date)
    {
        $this->params['refund_date']    = $refund_date;
    }

    /**
     * 退款批次号
     *
     * @param $batch_no
     */
    public function setBatchNo($batch_no)
    {
        $this->params['batch_no']   = $batch_no;
    }

    /**
     * 总笔数
     *
     * @param $batch_num
     */
    public function setBatchNum($batch_num)
    {
        $this->params['batch_num']  = $batch_num;
    }

    /**
     * 单笔数据集
     *
     * @param $detail_data
     */
    public function setDetailData($detail_data)
    {
        $this->params['detail_data']    = $detail_data;
    }

    /**
     * [可空]设置通知回调地址
     *
     * @param $notify_url
     */
    public function setNotifyUrl($notify_url)
    {
        $this->params['notify_url'] = $notify_url;
    }
}
