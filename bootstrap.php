<?php
require('./vendor/autoload.php');

class Bootstrap
{
    private $config;

    public function __construct($config_file)
    {
        $parser = new \Symfony\Component\Yaml\Parser();
        $this->config = $parser->parse(file_get_contents($config_file));
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