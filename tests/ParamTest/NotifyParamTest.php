<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/16
 * Time: 17:10
 */

namespace HuNanZai\Component\Pay\Package\Alipay_wap\Test\ParamTest;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\NotifyParam;

class NotifyParamTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NotifyParam
     */
    private $notify_param   = null;

    public function setUp()
    {
        $this->notify_param = new NotifyParam();
    }

    public function testSetNotifyId($notify_id)
    {

    }
}
