<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8
 * Time: 16:09
 */

namespace Sockstack\DesignPattern\Test;


use PHPUnit\Framework\TestCase;
use Sockstack\DesignPattern\FactoryMethod\Sample\Implemention\SUV;
use Sockstack\DesignPattern\FactoryMethod\Sample\Implemention\SUVFactory;
use Sockstack\DesignPattern\FactoryMethod\Sample\Implemention\Taxi;
use Sockstack\DesignPattern\FactoryMethod\Sample\Implemention\TaxiFactory;

class FactoryMethodText extends TestCase
{
    public function testFactoryMethod()
    {
        $suv = SUVFactory::create();
        $this->assertTrue($suv instanceof SUV);

        $taxi = TaxiFactory::create();
        $this->assertTrue($taxi instanceof Taxi);
    }
}