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
    private $params = null;

    public function __construct(array $param_array)
    {
        $this->params = $param_array;
    }

    /**
     * 获取通知的参数
     *
     * @return NotifyParam
     */
    public function getNotifyParam()
    {
        $notify_param = new NotifyParam();

        foreach ($this->params as $key => $value) {
            $method = $this->getKeySetMethod($key);

            if (method_exists($notify_param, $method)) {
                call_user_func_array(array($notify_param, $method), array($value));
            }
        }

        return $notify_param;
    }
}
