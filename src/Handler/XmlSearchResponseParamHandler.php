<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/26
 * Time: 9:33
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Param\BaseParam;
use HuNanZai\Component\Pay\Package\Alipay_wap\Param\SearchResponseParam;

class XmlSearchResponseParamHandler implements IParamHandler
{
    /**
     * @var string
     */
    private $xml = '';

    public function __construct($xml)
    {
        $this->xml  = $xml;
    }

    /**
     * @return BaseParam
     */
    public function getParam()
    {
        $response_param = new SearchResponseParam();


    }
}
