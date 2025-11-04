<?php

namespace App\Reports;

class PdfExporter implements ReportVisitor {
    public function visitSalesReport(SalesReport $report) {
        \Log::info("📄 Exporting Sales Report to PDF: ", $report->data());
    }
    public function visitInventoryReport(InventoryReport $report) {
        \Log::info("📦 Exporting Inventory Report to PDF: ", $report->data());
    }
}
