<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class ProductControllerTest
 */
class ProductControllerTest extends WebTestCase
{
 public function testShow(){
    $product = static::createClient();

    $product->request('GET', '/products/');
    $response = $product->getResponse();

    $this->assertEquals(200, $response->getStatusCode());

 }
}