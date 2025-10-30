<?php


namespace App\Services;

class EmailNotifier {
    public function sendEmail($msg) {
        return "📧 Sending Email: $msg";
    }
}
