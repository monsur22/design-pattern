<?php

namespace App\Reports;

class InventoryReport implements ReportElement {
    public function data() {
        return ['items_in_stock' => 120];
    }
    public function accept(ReportVisitor $visitor) {
        $visitor->visitInventoryReport($this);
    }
}
