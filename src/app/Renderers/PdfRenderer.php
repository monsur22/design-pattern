<?php

namespace App\Renderers;

use App\Contracts\ReportRenderer;

class PdfRenderer implements ReportRenderer
{
    public function render(string $data): string
    {
        return "📄 Rendering report as PDF: {$data}";
    }
}
