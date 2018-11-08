<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8
 * Time: 16:04
 */

namespace Sockstack\DesignPattern\FactoryMethod\Sample\Implemention;


use Sockstack\DesignPattern\FactoryMethod\Sample\Interfaces\FactoryInterface;

class SUVFactory implements FactoryInterface
{

    public static function create()
    {
        // TODO: Implement create() method.
        return new SUV();
    }
}