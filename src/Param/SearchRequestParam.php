<?php
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Param;

/**
 * Class SearchRequestParam
 *
 * 单笔交易查询接口，这个需要先签约产品，然后才能获取开发文档!
 * https://doc.open.alipay.com/support/hotProblemDetail.htm?spm=a219a.7386797.0.0.EQG4EO&id=225843
 *
 * @package HuNanZai\Component\Pay\Package\Alipay_wap\Param
 */
class SearchRequestParam extends BaseParam
{
    public function __construct()
    {
        $this->setDefaultService();
    }

    /**
     * 设置默认接口名称
     */
    public function setDefaultService()
    {
        $this->params['service']    = 'single_trade_query';
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
     * 参数编码字符集
     *
     * @param $input_charset
     */
    public function setInputCharset($input_charset)
    {
        $this->params['_input_charset'] = $input_charset;
    }

    /**
     * 设置支付宝交易号
     *
     * @param $trade_no
     */
    public function setTradeNo($trade_no)
    {
        $this->params['trade_no']   = $trade_no;
    }

    /**
     * 商户网站唯一订单号
     *
     * @param $out_trade_no
     */
    public function setOutTradeNo($out_trade_no)
    {
        $this->params['out_trade_no']   = $out_trade_no;
    }
}
