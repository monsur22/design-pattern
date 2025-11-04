<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public string $email,
        public string $message
    ) {}

    public function handle(): void
    {
        // Example email logic
        Mail::raw($this->message, function ($mail) {
            $mail->to($this->email)
                ->subject('📬 Command Pattern Email');
        });

        \Log::info("📨 Email sent to {$this->email}");
    }
}
