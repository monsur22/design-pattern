<?php

namespace App\Http\Controllers;

use App\Reports\SalesReport;
use App\Renderers\HtmlRenderer;
use App\Renderers\PdfRenderer;

class ReportController extends Controller
{
    public function show($type)
    {
        $renderer = $type === 'pdf'
            ? new PdfRenderer()
            : new HtmlRenderer();

        $report = new SalesReport($renderer);

        return $report->show();
    }
}
