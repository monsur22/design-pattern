<?php

namespace App\Reports;

interface ReportElement {
    public function accept(ReportVisitor $visitor);
}

