<?php

namespace App\ConventionEvent;

use App\Model\Event;
use App\Model\User;

/**
 * Class ConventionEventService
 * @package App\ConventionEvent
 */
class ConventionEventService
{
    public function subscribeUserToEvent(User $user, Event $event)
    {
        $event->addUser($user);
    }
}