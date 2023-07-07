<?php

namespace App\Listeners;

use App\Events\AuditEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class AuditEventListener
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
    public function handle(AuditEvent $event,  /* $table, $user, $data */ ): void
    {
        // \Log::info("User name {$event->user}");

        DB::table('audits')->insert([
            'event' => $event->event,
            'tablename' => $event->table,
            'username' => $event->user,
            'data' => $event->data,
        ]);
    }
}
