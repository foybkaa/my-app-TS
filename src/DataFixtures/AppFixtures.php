<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {   
        // Je génére grâce à ma boucle for 10 produits fictif
        for($i= 1; $i <= 10; $i++)
        {
         $product = new Product();

         $product->setName("Nom du produit-$i")
                 ->setPrice(mt_rand(10, 200))
                 ->setDescription("Description longue du produit-$i")
                 ->setCreatedAt(new \DateTime('now'));

         $manager->persist($product);
        }
        $manager->flush();
    }
}
