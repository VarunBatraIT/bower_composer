<?php
require('./vendor/autoload.php');

class Bootstrap
{
    private $config;

    public function __construct($config_file)
    {
        $parser = new Spyc();
        $this->config = $parser->loadFile($config_file);
    }

    public function getConfig()
    {
        return $this->config;
    }
}

$config_file = './config/config.yml';
$bootstrap = new Bootstrap($config_file);
$config = $bootstrap->getConfig();
?>