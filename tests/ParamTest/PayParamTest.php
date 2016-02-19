<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/17
 * Time: 9:29
 */

namespace HuNanZai\Component\Pay\Package\Alipay_wap\Test\ParamTest;

use HuNanZai\Component\Pay\Package\Alipay_wap\Exception\InvalidParamException;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\PayParam;

class PayParamTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PayParam
     */
    private $pay_param = null;

    public function setUp()
    {
        $this->pay_param = new PayParam();
    }

    public function testSetDefaultService()
    {
        $params = $this->pay_param->getParams();

        $this->assertEquals('alipay.wap.create.direct.pay.by.user', $params['service']);
    }

    public function testSetDefaultPaymentType()
    {
        $params = $this->pay_param->getParams();

        $this->assertEquals('1', $params['payment_type']);
    }

    public function testSetPartner()
    {
        $partner    = '2088123443215678';

        $this->pay_param->setPartner($partner);
        $params = $this->pay_param->getParams();

        $this->assertEquals($partner, $params['partner']);
    }

    /**
     * @param $partner
     *
     * @dataProvider partnerExceptionProvider
     */
    public function testSetPartnerThrowException($partner)
    {
        $this->setExpectedException(InvalidParamException::class);
        $this->pay_param->setPartner($partner);
    }

    public function partnerExceptionProvider()
    {
        return array(
            'head'      => array('2121123445674567'),
            'length'    => array('208812341234'),
            'type_arr'  => array(array(123)),
            'type_obj'  => array(new \stdClass()),
            'null'      => array(null),
            'empty'     => array(''),
        );
    }

    public function testSetSellerId()
    {
        $seller_id  = '2088456778941234';

        $this->pay_param->setSellerId($seller_id);
        $params = $this->pay_param->getParams();

        $this->assertEquals($seller_id, $params['seller_id']);
    }

    /**
     * @param $seller_id
     *
     * @dataProvider partnerExceptionProvider
     */
    public function testSetSellerIdThrowException($seller_id)
    {
        $this->setExpectedException(InvalidParamException::class);
        $this->pay_param->setSellerId($seller_id);
    }

    public function testSetInputCharset()
    {
        $this->pay_param->setInputCharset('utf-8');

        $params = $this->pay_param->getParams();

        $this->assertEquals('utf-8', $params['_input_charset']);
    }

    public function testSetInputCharsetThrowException()
    {
        $this->setExpectedException(InvalidParamException::class);

        $this->pay_param->setInputCharset('test');
    }

    public function testSetOutTradeNo()
    {
        $out_trade_no   = 'aaabbbcccddd';

        $this->pay_param->setOutTradeNo($out_trade_no);
        $params = $this->pay_param->getParams();

        $this->assertEquals($out_trade_no, $params['out_trade_no']);
    }

    /**
     * @param $out_trade_no
     *
     * @dataProvider outTradeNoExceptionProvider
     */
    public function testSetOutTradeNoThrowException($out_trade_no)
    {
        $this->setExpectedException(InvalidParamException::class);
        $this->pay_param->setOutTradeNo($out_trade_no);
    }

    public function outTradeNoExceptionProvider()
    {
        return array(
            'type_obj'      => array(new \stdClass()),
            'type_arr'      => array(array('123')),
            'length_long'   => array('dddddddddddddddddddddddddddddddddddddddddddfsfdsfsfsfsfffffffffffffffffffffffffffffffffffsfsdfsfsfsfsdfds'),
            'length_short'  => array(''),
            'null'          => array(null),
        );
    }

    public function testSetTotalFee()
    {
        $total_fee  = 5.55;

        $this->pay_param->setTotalFee($total_fee);

        $params = $this->pay_param->getParams();
        $this->assertEquals($total_fee, $params['total_fee']);
    }

    /**
     * @param $total_fee
     *
     * @dataProvider totalFeeExceptionProvider
     */
    public function testSetTotalFeeThrowException($total_fee)
    {
        $this->setExpectedException(InvalidParamException::class);

        $this->pay_param->setTotalFee($total_fee);
    }

    public function totalFeeExceptionProvider()
    {
        return array(
            'neg'       => array(-5),
            'zero'      => array(0),
            'max'       => array(200000000000000),
        );
    }

    public function testSetSubject()
    {
        $subject    = '哈哈哈哈哈';

        $this->pay_param->setSubject($subject);
        $params = $this->pay_param->getParams();

        $this->assertEquals($subject, $params['subject']);
    }

    /**
     * @param $subject
     *
     * @dataProvider subjectExceptionProvider
     */
    public function testSetSubjectThrowException($subject)
    {
        $this->setExpectedException(InvalidParamException::class);

        $this->pay_param->setSubject($subject);
    }

    public function subjectExceptionProvider()
    {
        return array(
            'null'      => array(null),
            'empty'     => array(''),
            'max'       => array('分阶段司法局送到附近哦is京东方i哦随即发动机上冬季佛山多家佛山多家佛山多家佛分鸡丝豆腐鸡丝豆腐jo岁的金佛山京东方将分阶段司法局送到家佛山多家of鸡丝豆腐jo第三季佛山多家山东金佛山多家'),
        );
    }
}
