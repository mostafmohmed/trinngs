<?php

namespace App\Jobs;

use App\Models\User;
use App\Notifications\NewNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class sendtask implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $data;
    public function __construct($date)
    {
       $this->data=$date;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
      
          User::find(Auth::id()) ->notify(new NewNotification($this->data));
    }
}
