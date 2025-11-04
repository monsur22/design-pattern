<?php

namespace App\Reports;

interface ReportVisitor {
    public function visitSalesReport(SalesReport $report);
    public function visitInventoryReport(InventoryReport $report);
}

