<?php

namespace Sockstack\DesignPattern\Singleton\Sample;

class Singleton
{
    //用来保存实例
    private static $instance;

    //将构造函数私有化
    private function __construct()
    {
    }

    //获取实例
    public static function getInstance()
    {
        return empty(static::$instance) ? static::$instance = new static() : static::$instance;
    }

    //防止对象被复制
    public function __clone()
    {
        trigger_error('对象不能被复制');
    }

    //防止对象被序列化后创建对象
    public function __wakeup()
    {
        trigger_error('对象不能被反序列化');
    }
}
