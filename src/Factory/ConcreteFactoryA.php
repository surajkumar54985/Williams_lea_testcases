<?php

namespace App\Factory;

class ConcreteFactoryA implements Factory
{
    public function createProduct(): Product
    {
        return new ConcreteProductA();
    }
}
?>