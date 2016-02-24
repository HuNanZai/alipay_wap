<?php
include_once __DIR__.'/../vendor/autoload.php';

//change the value to your environment
$url_root   = '';
$log_path   = '';

\HuNanZai\Component\Log\LoggerFactory::setLogFolderPath($log_path);
define('URL_ROOT', $url_root);
