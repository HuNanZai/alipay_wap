<?php
include_once __DIR__.'/bootstrap.php';

use HuNanZai\Component\Pay\Package\Alipay_wap\Api as Api;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\PhpFileConfigHandler as ConfigHandler;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\ArrayCallbackParamHandler as CallbackParamHander;
use HuNanZai\Component\Log\Service as Logger;

$config_handler = new ConfigHandler(__DIR__.'/config.php');
$config = $config_handler->getConfig();

$callback_param_handler   = new CallbackParamHander($_GET);
$callback_param   = $callback_param_handler->getParam();

$alipay_api = new Api($config);
$res = $alipay_api->verifyCallback($callback_param);

Logger::addInfo('alipay_wap_demo', 'callback', array(
    'get'   => $_GET,
    'res'   => $res,
));

if ($res) {
    header("Location: https://www.baidu.com");
    die();
} else {
    header("Location: http://www.ci123.com");
    die();
}
