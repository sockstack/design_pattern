<?php
/**
 * Created by PhpStorm.
 * User: sockstack
 * Date: 2018/11/7
 * Time: 23:43
 */

namespace Sockstack\DesignPattern\Test;


use PHPUnit\Framework\TestCase;
use Sockstack\DesignPattern\SimpleFactory\Sample\Driver\MysqliDriver;
use Sockstack\DesignPattern\SimpleFactory\Sample\Driver\MysqlDriver;
use Sockstack\DesignPattern\SimpleFactory\Sample\SimpleFactory;

class SimpleFactoryTest extends TestCase
{
    public function testSimpleFactory()
    {
        $mysql = SimpleFactory::createMysql();
        if (!$mysql instanceof MysqlDriver) {
            $this->fail("创建实例对象失败");
        }

        $mysqli = SimpleFactory::createMysqli();
        if (!$mysqli instanceof MysqliDriver) {
            $this->fail("创建实例对象失败");
        }
    }
}