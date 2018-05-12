<?php

namespace App\UI\Action;
use App\Domain\Models\User;
use App\Event\CoucouEvent;
use App\Event\UserCreatedEvent;
use App\Helper\FileUploaderHelper;
use App\UI\Action\Interfaces\HomeActionInterface;
use App\UI\Responder\Interfaces\HomeResponderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(
 *     path="/",
 *     name="homepage"
 * )
 */
class HomeAction implements HomeActionInterface
{
    /**
     * @var FileUploaderHelper
     */
    private $fileUploaderHelper;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    public function __construct(FileUploaderHelper $fileUploaderHelper, EventDispatcherInterface $eventDispatcher)
    {
        $this->fileUploaderHelper = $fileUploaderHelper;
        $this->eventDispatcher = $eventDispatcher;
    }


    public function __invoke(HomeResponderInterface $homeResponder)
    {

        //Formulaire creation user

        $user = new User("limozaza","zakboite@gmail.com");

        //$this->eventDispatcher->dispatch(CoucouEvent::NAME, new CoucouEvent());
        $this->eventDispatcher->dispatch(UserCreatedEvent::NAME, new UserCreatedEvent($user));
        echo($this->fileUploaderHelper->getImageFolder());
        return $homeResponder();
    }
}