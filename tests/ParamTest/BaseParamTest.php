<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/16
 * Time: 10:49
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Test\ParamTest;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\BaseParam;

class BaseParamTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BaseParam
     */
    private $base_param = null;

    public function setUp()
    {
        $this->base_param = new BaseParam();
    }

    /**
     * @dataProvider singleParamProvider
     */
    public function testSetSign($sign)
    {
        $this->base_param->setSign($sign);
        $this->assertEquals(array('sign'=>$sign), $this->base_param->getParams());
    }

    /**
     * @dataProvider singleParamProvider
     */
    public function testSetSignType($sign_type)
    {
        $this->base_param->setSignType($sign_type);
        $this->assertEquals(array('sign_type'=>$sign_type), $this->base_param->getParams());
    }

    /**
     * @dataProvider doubleParamProvider
     */
    public function testGetParamString($sign, $sign_type)
    {
        $this->base_param->setSign($sign);
        $this->base_param->setSignType($sign_type);

        $this->assertEquals("sign={$sign}&sign_type={$sign_type}", $this->base_param->getParamString());
    }

    /**
     * @dataProvider doubleParamProvider
     */
    public function testGetParamStringUrlEncode($sign, $sign_type)
    {
        $this->base_param->setSign($sign);
        $this->base_param->setSignType($sign_type);

        $this->assertEquals(http_build_query(array('sign'=>$sign, 'sign_type'=>$sign_type)), $this->base_param->getParamStringUrlEncode());
    }

    /**
     * @dataProvider doubleParamProvider
     */
    public function testFilter($sign, $sign_type)
    {
        $this->base_param->setSign($sign);
        $this->base_param->setSignType($sign_type);

        $this->assertEquals(array('sign'=>$sign, 'sign_type'=>$sign_type), $this->base_param->getParams());

        $this->base_param->filter();

        $this->assertEquals(array(), $this->base_param->getParams());
    }

    /**
     * @dataProvider doubleParamProvider
     */
    public function testSort($sign, $sign_type)
    {
        $this->base_param->setSign($sign);
        $this->base_param->setSignType($sign_type);

        $this->base_param->sort();

        $this->assertEquals(array('sign'=>$sign, 'sign_type'=>$sign_type), $this->base_param->getParams());
    }

    public function testToString()
    {
        $this->assertEquals('[]', (string)$this->base_param);

        $this->base_param->setSign('hunanzai');
        $this->assertEquals('{"sign":"hunanzai"}', (string)$this->base_param);

        $this->base_param->setSignType('wuwanli');
        $this->assertEquals('{"sign":"hunanzai","sign_type":"wuwanli"}', (string)$this->base_param);
    }

    public function singleParamProvider()
    {
        return array(
            '1'     => array('hunanzai'),
            '2'     => array('wwl'),
            'test'  => array('wuwanli'),
        );
    }

    public function doubleParamProvider()
    {
        return array(
            '1' => array('hunanzai', '123'),
            '2' => array('wuwanli', '425616'),
        );
    }
}
