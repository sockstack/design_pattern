<?php
/**
 * Created by PhpStorm.
 * User: sockstack
 * Date: 2018/11/7
 * Time: 23:34.
 */

namespace Sockstack\DesignPattern\SimpleFactory\Sample;

use Sockstack\DesignPattern\SimpleFactory\Sample\Driver\MysqlDriver;
use Sockstack\DesignPattern\SimpleFactory\Sample\Driver\MysqliDriver;

class SimpleFactory
{
    /**
     * 返回mysql实例.
     *
     * @return MysqlDriver
     */
    public static function createMysql()
    {
        return new MysqlDriver();
    }

    /**
     * 返回mysqli实例.
     *
     * @return MysqliDriver
     */
    public static function createMysqli()
    {
        return new MysqliDriver();
    }
}
