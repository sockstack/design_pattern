<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8
 * Time: 16:05.
 */

namespace Sockstack\DesignPattern\FactoryMethod\Sample\Implemention;

use Sockstack\DesignPattern\FactoryMethod\Sample\Interfaces\ProductInterface;

class SUV implements ProductInterface
{
    public function action()
    {
        // TODO: Implement action() method.
        return 'SUV';
    }
}
