<?php
include_once __DIR__ . '/bootstrap.php';

use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\PhpFileConfigHandler as ConfigHandler;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\ArraySearchRequestParamHandler as ParamHandler;
use HuNanZai\Component\Pay\Package\Alipay_wap\Api as Api;

$config_handler = new ConfigHandler(__DIR__ . '/config.php');
$config         = $config_handler->getConfig();

$param_handler = new ParamHandler(array(
    'trade_no'     => '',
    'out_trade_no' => '',
));

$param = $param_handler->getParam();

$alipay_api = new Api($config);
try {
    $result = $alipay_api->search($param);
} catch (\Exception $e) {
    var_dump($e);
}

$doc = new DOMDocument();
$doc->loadXML($result);

//请在这里加上商户的业务逻辑程序代码

//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——

//获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

//解析XML
if (!empty($doc->getElementsByTagName("alipay")->item(0)->nodeValue)) {
    $alipay = $doc->getElementsByTagName("alipay")->item(0)->nodeValue;
    echo $alipay;
}
