<?php


namespace App\Controller;


use App\Entity\Customer;
use App\Entity\Product;
use App\EventListener\BasketProductAdded;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class BasketController extends AbstractController
{
    public function add(EventDispatcherInterface $eventDispatcher, Product $product)
    {

        $event = new BasketProductAdded($product, $this->getUser());
        $eventDispatcher->dispatch(BasketProductAdded::NAME, $event);
    }
}
