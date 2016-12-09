<?php
/**
 * Created by PhpStorm.
 * User: ckogler
 * Date: 24.06.2016
 * Time: 13:35
 */
namespace ProcessManager\Executor\Logger;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

abstract class AbstractLogger {

    const LOG_FORMAT_SIMPLE = "[%datetime%] %channel%.%level_name%: %message% \n";
    public $extJsClass = '';

    public $name = '';

    protected $config = [];

    /**
     * @return string
     */
    public function getExtJsClass()
    {
        return $this->extJsClass;
    }

    /**
     * @param string $extJsClass
     * @return $this
     */
    public function setExtJsClass($extJsClass)
    {
        $this->extJsClass = $extJsClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $config
     * @return $this
     */
    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }


    /**
     * @param $monitoringItem \ProcessManager\MonitoringItem
     * @return string
     */
    abstract public function getGridLoggerHtml($monitoringItem,$actionData);

    /**
     * @param array $config
     * @param \ProcessManager\MonitoringItem $monitoringItem
     * @return StreamHandler
     */
    abstract public function createStreamHandler($config,$monitoringItem);

}