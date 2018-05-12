<?php

namespace App\Event;


use Symfony\Component\EventDispatcher\Event;

class UserCreatedEvent extends Event
{
    const NAME = "user.created";

    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

}