#目的
 - 支付宝的demo很搓
 - 项目需要接入很多支付，磋上加搓，不是特别好管理

#本类库的目标
 - 完成跟支付宝手机网关支付对接的功能
 - 便于后面扩展（利用各种Handler）,可测试

#如何使用本类库？
##1. 预先加载配置
- 目前提供文件的方式加载配置
```
use HuNanZai\Component\Pay\Package\Alipay_wap\Api as AlipayApi;
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\PhpFileConfigHandler as ConfigHandler;
    
$config_handler = new ConfigHandler(__DIR__.'/config.php');
$alipay_api = new AlipayApi($config_handler->getConfig());
```
config.php
```
<?php
return array(
    'partner'   => 'xxxxxxxxxxxxxxxx',
    'seller_id' => 'xxxxxxxxxxxxxxxx',
    'private_key_path'  => __DIR__.'/resource/rsa_private_key.pem',
    'public_key_path'   => __DIR__.'/resource/rsa_public_key.pem',
    'cacert'            => __DIR__.'resource/cacert.pem',
);
```

##调用对应的api即可
- 支付
```
use HuNanZai\Component\Pay\Package\Alipay_wap\Handler\ArrayPayParamHandler as PayParamHandler;

$pay_param_handler  = new PayParamHandler(array(
    'out_trade_no'  => date('YmdHis),
    'subject'       => '',
    'total_fee'     => '0.01',
    //可空
    'notify_url'    => '',
    'return_url'    => '',
));
$alipay_api->pay($pay_param_handler->getParam());
```

- 支付同步返回验证
```
...略过上面的类似步骤
$callback_param_handler   = new CallbackParamHander($_GET);
$res = $alipay_api->verifyCallback($callback_param_handler->getParam());
```

- 支付异步通知验证
```
$notify_param_handler   = new NotifyParamHandler($_POST);
$res    = $alipay_api->verifyNotify($notify_param_handler->getParam());
```

- 查询订单
```
$param_handler = new SearchRequestParamHandler(array(
    'trade_no'     => '',
    'out_trade_no' => '',
));
$result = $alipay_api->search($param_handler->getParam());
```

- 退款
```
$refund_param_handler   = new RefundParamHandler(array(
    'refund_date'   => date('Y-m-d H:i:s'),
    'batch_no'      => date('YmdHis'),
    'batch_num'     => 1,
    'detail_data'   => 'xxxx^0.01^测试退款',
));

$result = $alipay_api->refund($refund_param_handler->getParam());
```