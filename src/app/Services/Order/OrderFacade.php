<?php

namespace App\Services\Order;

class OrderFacade {
    protected PaymentService $payment;
    protected InventoryService $inventory;
    protected EmailService $email;

    public function __construct()
    {
        $this->payment = new PaymentService();
        $this->inventory = new InventoryService();
        $this->email = new EmailService();
    }

    public function placeOrder(): array
    {
        return [
            $this->payment->pay(),
            $this->inventory->update(),
            $this->email->send(),
        ];
    }
}
