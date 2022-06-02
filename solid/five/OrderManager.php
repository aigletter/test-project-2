<?php

namespace Solid\five;

class OrderManager
{
    protected $repository;

    protected $reporter;

    public function __construct(OrderRepositoryInterface $repository, OrderReporter $reporter)
    {
        $this->repository = $repository;
        $this->reporter = $reporter;
    }

    public function run(Order $order)
    {
        $this->repository->saveOrder($order);
        $this->reporter->report($order);
    }
}