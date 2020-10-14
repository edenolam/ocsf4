<?php


namespace App\EventListener;


use App\Entity\Customer;
use App\Entity\Product;
use Symfony\Component\EventDispatcher\Event;

class BasketProductAdded extends Event
{
    const NAME = 'basket.product_added';

    private $product;
    private $customer;


    public function __construct(Product $product, Customer $customer)
    {
        $this->product = $product;
        $this->customer = $customer;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @return Customer
     */

    public function getCustomer(): Customer
    {
        return $this->customer;
    }
}
