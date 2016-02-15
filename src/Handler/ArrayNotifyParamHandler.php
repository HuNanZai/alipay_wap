<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/14
 * Time: 9:33
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\NotifyParam;

class ArrayNotifyParamHandler extends BaseArrayHandler
{
    /**
     * 获取通知的参数
     *
     * @return NotifyParam
     */
    public function getParam()
    {
        $notify_param = new NotifyParam();

        $this->setParam($notify_param);

        return $notify_param;
    }
}
