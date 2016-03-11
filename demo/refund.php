<?php
include_once __DIR__.'/bootstrap.php';

use HuNanZai\Component\Pay\Package\Alipay_wap\Api as AlipayApi;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\PhpFileConfigHandler as ConfigHandler;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\ArrayRefundParamHandler as ParamHandler;

$config_handler     = new ConfigHandler(__DIR__.'/config.php');
$config = $config_handler->getConfig();

$param_handler   = new ParamHandler(array(
    'refund_date'   => date('Y-m-d H:i:s'),
    'batch_no'      => date('YmdHis'),
    'batch_num'     => 1,
    'detail_data'   => 'xxxx^0.01^测试退款',
));

$alipay_api = new AlipayApi($config);
try {
    $result = $alipay_api->refund($param_handler->getParam());
    echo $result;
} catch (Exception $e) {
    var_dump($e);
}
