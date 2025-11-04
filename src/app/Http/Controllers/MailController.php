<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;

class MailController extends Controller
{
    public function send()
    {
        SendEmailJob::dispatch('user@example.com', 'Hello from Command Pattern!');
        return response()->json(['status' => 'Email command dispatched ✅']);
    }
}
