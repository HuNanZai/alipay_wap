<?php
include_once __DIR__.'/bootstrap.php';

use HuNanZai\Component\Pay\Package\Alipay_wap\Api as Api;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\PhpFileConfigHandler as ConfigHandler;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\ArrayNotifyParamHandler as NotifyParamHandler;

$config_handler = new ConfigHandler(__DIR__.'/config.php');
$config = $config_handler->getConfig();

$notify_param_handler   = new NotifyParamHandler($_POST);
$notify_param   = $notify_param_handler->getParam();

$alipay_api = new Api($config);
if ($alipay_api->verifyCallback($notify_param)) {
    header("Location: https://www.baidu.com");
    die();
} else {
    header("Location: http://www.ci123.com");
    die();
}
