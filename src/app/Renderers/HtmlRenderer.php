<?php

namespace App\Renderers;

use App\Contracts\ReportRenderer;

class HtmlRenderer implements ReportRenderer
{
    public function render(string $data): string
    {
        return "<h3>🌍 Rendering report as HTML:</h3><p>{$data}</p>";
    }
}
