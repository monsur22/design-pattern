<?php

namespace App\Reports;

use App\Contracts\ReportRenderer;

abstract class Report
{
    protected ReportRenderer $renderer;

    public function __construct(ReportRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    abstract public function show(): string;
}
