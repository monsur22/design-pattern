<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmailNotifier;
use App\Services\SlackNotifier;
use App\Adapters\SlackAdapter;

class NotificationController extends Controller
{
    public function send()
    {
        // ✅ পুরনো সিস্টেম শুধু EmailNotifier চেনে
        $notifier = new SlackAdapter(new SlackNotifier());

        // ✅ এখন Adapter ব্যবহার করে Slack-এও মেসেজ পাঠানো যাবে
        $message = $notifier->sendEmail("Hello Adapter Pattern in Laravel!");

        return response()->json([
            'status' => 'success',
            'message' => $message
        ]);
    }
}
