<?php

namespace App\Reports;

class SalesReport implements ReportElement {
    public function data() {
        return ['total_sales' => 5000];
    }
    public function accept(ReportVisitor $visitor) {
        $visitor->visitSalesReport($this);
    }
}

