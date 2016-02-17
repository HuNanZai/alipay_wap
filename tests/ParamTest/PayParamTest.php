<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/17
 * Time: 9:29
 */

namespace HuNanZai\Component\Pay\Package\Alipay_wap\Test\ParamTest;


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

    /**
     * @dataProvider partnerDataProvider
     */
    public function testSetPartner($partner)
    {

    }

    public function partnerDataProvider()
    {
        return array(
        );
    }

    public function partnerErrorProvider()
    {
        return array(

        );
    }
}
