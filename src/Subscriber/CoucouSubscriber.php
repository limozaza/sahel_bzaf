<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 12/05/18
 * Time: 01:43
 */

namespace App\Subscriber;


use App\Event\CoucouEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;

class CoucouSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            CoucouEvent::NAME => 'onCoucou'
        ];
    }

    public function onCoucou(CoucouEvent $event)
    {
        return new Response(
            $event->sayHello()
        );
    }
}