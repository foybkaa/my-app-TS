<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProduct()
    {
        $product = (new Product())
            ->setName('Foo')
            ->setDescription('AZERTY')
        ;

        $product = new Product();
        $product->setName('Foo');
        $product->setDescription('AZERTY');

        $string = 'Foo AZERTY';
        $realString = $product->__toString();

        $this->assertInternalType('string', $realString);
        $this->assertSame($string, $realString);
    }
}