<?php

namespace App\Listeners;

use App\Events\contact;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ContactMail;
use Mail;


class contactlistener
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
     * @param  contact  $event
     * @return void
     */
    public function handle(contact $event)
    {
        Mail::to($event->request)->send(new ContactMail($event->request));
    }
}
