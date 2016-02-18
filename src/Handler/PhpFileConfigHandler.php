<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/5
 * Time: 14:00
 */
namespace HuNanZai\Component\Pay\Package\Alipay_wap\Handler;

use HuNanZai\Component\Pay\Package\Alipay_wap\Config;
use HuNanZai\Component\Pay\Package\Alipay_wap\Exception\ConfigFileNotExistException;
use HuNanZai\Component\Log\Service as Logger;
use HuNanZai\Component\Pay\Package\Alipay_wap\Support\String;

class PhpFileConfigHandler
{
    private $config_file_path = null; //配置文件的路径

    public function __construct($config_file_path = '')
    {
        if (!file_exists($config_file_path)) {
            throw new ConfigFileNotExistException();
        }
        $this->config_file_path = $config_file_path;
    }

    /**
     * @return Config
     */
    public function getConfig()
    {
        $config = new Config();

        $tmp = include "{$this->config_file_path}";
        Logger::addInfo('alipay_wap_handler_phpfileconfig', 'load the confing array', array(
            'config_file_path' => $this->config_file_path,
            'config_array'     => $tmp,
        ));

        foreach ($tmp as $key => $val) {
            $method = String::convertKeyToFuncName($key);

            if (method_exists($config, $method)) {
                call_user_func_array(array($config, $method), array($val));
            }
            //$config->$key = $val;
        }

        return $config;
    }
}
