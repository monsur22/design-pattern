<?php

namespace App\States;

interface OrderState {
    public function proceed(): OrderState;
    public function status(): string;
}

