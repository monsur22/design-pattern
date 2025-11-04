<?php
namespace App\Reports;

class CsvExporter implements ReportVisitor {
    public function visitSalesReport(SalesReport $report) {
        \Log::info("🧾 Exporting Sales Report to CSV: ", $report->data());
    }
    public function visitInventoryReport(InventoryReport $report) {
        \Log::info("📋 Exporting Inventory Report to CSV: ", $report->data());
    }
}
