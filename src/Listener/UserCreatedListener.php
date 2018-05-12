<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 12/05/18
 * Time: 02:00
 */

namespace App\Listener;


use App\Event\UserCreatedEvent;

class UserCreatedListener
{
    public function onUserCreated(UserCreatedEvent $event)
    {
        //Envoi mail
        dump($event->getUser());
    }
}