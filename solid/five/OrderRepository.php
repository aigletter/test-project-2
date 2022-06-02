<?php

namespace Solid\five;

class OrderRepository
{
    protected $store;

    public function __construct(StoreInterface $store)
    {
        $this->store = $store;
    }

    public function saveOrder(Order $order)
    {
        $this->store->store([
            'id' => $order->getId(),
            'products' => $order->getProducts()
        ]);
    }

    public function getOrder($id): Order
    {
        $data = $this->store->get($id);
        $order = new Order();
        $order->setId($data['id']);
        $products = json_decode($data['products'], true);
        foreach ($products as $item) {
            $product = new Product($item['name'], $item['price'], $item['amount']);
            $order->addProduct($product);
        }
        return $order;
    }
}