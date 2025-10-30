<?php


namespace App\Adapters;

use App\Services\EmailNotifier;
use App\Services\SlackNotifier;

class SlackAdapter extends EmailNotifier {
    private $slack;

    public function __construct(SlackNotifier $slack)
    {
        $this->slack = $slack;
    }

    public function sendEmail($msg)
    {
        // Adapter Slack-এর method কে EmailNotifier-এর interface অনুযায়ী রূপান্তর করে
        return $this->slack->pushMessage($msg);
    }
}

