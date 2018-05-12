<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 12/05/18
 * Time: 01:30
 */

namespace App\Event;


use Symfony\Component\EventDispatcher\Event;

class CoucouEvent extends Event
{
    const NAME = "coucou.event";

    public function sayHello()
    {
        echo 'Coucou Zakaria';
    }
}