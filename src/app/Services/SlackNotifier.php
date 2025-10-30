<?php


namespace App\Services;

class SlackNotifier {
    public function pushMessage($msg) {
        return "💬 Slack Message: $msg";
    }
}
