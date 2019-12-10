<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/products")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="products_show", methods={"GET"})
     */
    public function show(ProductRepository $repo)
    {
        $products = $repo->findAll();

        $datas = array();
        foreach($products as $key => $product){
            $datas[$key]['name'] = $product->getName();
            $datas[$key]['price'] = $product->getPrice();
            $datas[$key]['description'] = $product->getDescription();
            $datas[$key]['createdAt'] = $product->getCreatedAt()->format('d-m-Y H:i');
        }
       return new JsonResponse($datas);
    }
}
