<?php
include_once __DIR__.'/bootstrap.php';

use HuNanZai\Component\Pay\Package\Alipay_wap\Api as Api;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\PhpFileConfigHandler as ConfigHandler;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\ArrayNotifyParamHandler as NotifyParamHandler;
use HuNanZai\Component\Log\Service as Logger;

$config_handler = new ConfigHandler(__DIR__.'/config.php');
$config = $config_handler->getConfig();

$notify_param_handler   = new NotifyParamHandler($_POST);
$notify_param   = $notify_param_handler->getParam();

$alipay_api = new Api($config);
$res    = $alipay_api->verifyNotify($notify_param);

Logger::addInfo('alipay_wap_demo', 'notify', array(
    'post'  => $_POST,
    'res'   => $res,
));

if ($res) {
    echo "success";
} else {
    echo "fail";
}
