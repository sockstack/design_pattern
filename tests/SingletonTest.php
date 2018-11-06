<?php
/**
 * Created by PhpStorm.
 * User: sockstack
 * Date: 2018/11/6
 * Time: 23:36
 */
namespace Sockstack\DesignPattern\Test;

use PHPUnit\Framework\TestCase;
use Sockstack\DesignPattern\Singleton\Sample\Singleton;

class SingletonTest extends TestCase
{
    /**
     * @expectedException \Error
     */
    public function testSingletonByNew()
    {
        $object = new Singleton();
        $this->fail("create fail");
    }

    /**
     * @expectedException \PHPUnit_Framework_Error
     * @expectedExceptionMessage 对象不能被复制
     */
    public function testSingletonClone()
    {
        $object = Singleton::getInstance();
        $clone_objecdt = clone $object;

        $this->fail("clone fail");
    }

    /**
     * @expectedException \PHPUnit_Framework_Error
     * @expectedExceptionMessage 对象不能被反序列化
     */
    public function testSingletonUnserialize()
    {
        $object = Singleton::getInstance();
        $unserialize_object = unserialize(serialize($object));

        $this->fail("unserialize fail");
    }

    public function testSingleton()
    {
        $object1 = Singleton::getInstance();
        $object2 = Singleton::getInstance();

        $this->assertEquals($object1, $object2);
    }
}