<?php
include_once __DIR__.'/bootstrap.php';

use HuNanZai\Component\Pay\Package\Alipay_wap\Api as AlipayApi;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\PhpFileConfigHandler as ConfigHandler;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\ArrayPayParamHandler as PayParamHandler;

$config_handler     = new ConfigHandler(__DIR__.'/config.php');
$config = $config_handler->getConfig();

$pay_param_handler  = new PayParamHandler(array(
    'out_trade_no'  => date('YmdHis'),
    'subject'       => '测试订单',
    'total_fee'     => '0.01',
    //可空
    'notify_url'    => '',
    'return_url'    => '',
));

$alipay_api = new AlipayApi($config);
try {
    $result = $alipay_api->pay($pay_param_handler->getParam());
} catch (Exception $e) {
    var_dump($e);
}

var_dump($result);
