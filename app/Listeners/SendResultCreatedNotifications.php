<?php

namespace App\Listeners;

use App\Events\ResultCreated;
use App\Models\User;
use App\Notifications\NewResult;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendResultCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ResultCreated $event): void
    {
        foreach (User::whereNot('id', $event->result->user_id)->cursor() as $user) {
            $user->notify(new NewResult($event->result));
        }
    }
}
