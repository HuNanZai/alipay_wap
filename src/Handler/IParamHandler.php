<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/11
 * Time: 10:24
 */

namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\BaseParam;

interface IParamHandler
{
    /**
     * @return BaseParam
     */
    public function getParam();
}
