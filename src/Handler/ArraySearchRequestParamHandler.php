<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/24
 * Time: 16:58
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\SearchRequestParam;

class ArraySearchRequestParamHandler extends BaseArrayHandler
{
    /**
     * 获取参数
     *
     * @return SearchRequestParam
     */
    public function getParam()
    {
        $search_request_param   = new SearchRequestParam();

        $this->setParam($search_request_param);

        return $search_request_param;
    }
}
