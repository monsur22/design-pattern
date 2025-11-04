<?php

namespace App\Http\Controllers;

use App\Reports\{SalesReport, InventoryReport, PdfExporter, CsvExporter};

class ReportController extends Controller
{
    public function export()
    {
        $reports = [new SalesReport(), new InventoryReport()];
        $exporter = request('format') === 'csv'
            ? new CsvExporter()
            : new PdfExporter();

        foreach ($reports as $report) {
            $report->accept($exporter);
        }

        return response()->json(['status' => 'Reports exported successfully ✅']);
    }
}
