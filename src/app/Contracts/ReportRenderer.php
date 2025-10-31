<?php

namespace App\Contracts;

interface ReportRenderer
{
    public function render(string $data): string;
}
