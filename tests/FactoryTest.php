<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Factory\ConcreteFactoryA;
use App\Factory\ConcreteFactoryB;

class FactoryTest extends TestCase
{
    public function testCreateProductA()
    {
        $factoryA = new ConcreteFactoryA();
        
        try {
            $productA = $factoryA->createProduct();
            $this->assertEquals("Product A", $productA->getName());
        } catch (\Exception $e) {
            $this->fail('An exception occurred: ' . $e->getMessage());
        }
    }

    public function testCreateProductB()
    {
        $factoryB = new ConcreteFactoryB();
        
        try {
            $productB = $factoryB->createProduct();
            $this->assertEquals("Product B", $productB->getName());
        } catch (\Exception $e) {
            $this->fail('An exception occurred: ' . $e->getMessage());
        }
    }
}

?>