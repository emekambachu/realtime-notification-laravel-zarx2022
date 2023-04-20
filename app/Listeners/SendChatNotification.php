<?php

namespace App\Listeners;

use App\Events\ChatRecieved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendChatNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ChatRecieved  $event
     * @return void
     */
    public function handle(ChatRecieved $event)
    {
        //
    }
}
