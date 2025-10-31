<?php

namespace App\Reports;

class SalesReport extends Report
{
    public function show(): string
    {
        $data = "Sales data for October 2025";
        return $this->renderer->render($data);
    }
}
