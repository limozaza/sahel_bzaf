<?php

namespace App\UI\Action;
use App\Domain\Models\User;
use App\Event\CoucouEvent;
use App\Event\UserCreatedEvent;
use App\UI\Form\Handler\AddArticleTypeHandler;
use App\UI\Form\Type\AddArticleType;
use App\Helper\FileUploaderHelper;
use App\UI\Action\Interfaces\HomeActionInterface;
use App\UI\Responder\Interfaces\HomeResponderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
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


    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    private $addArticleTypeHandler;

    public function __construct(FileUploaderHelper $fileUploaderHelper,
                                EventDispatcherInterface $eventDispatcher,
                                FormFactoryInterface $formFactory,
                                AddArticleTypeHandler $addArticleTypeHandler
    )
    {
        $this->fileUploaderHelper = $fileUploaderHelper;
        $this->eventDispatcher = $eventDispatcher;
        $this->formFactory = $formFactory;
        $this->addArticleTypeHandler = $addArticleTypeHandler;
    }


    public function __invoke(Request $request, HomeResponderInterface $homeResponder)
    {

        //Formulaire creation user

//        $user = new User("limozaza","zakboite@gmail.com");
//        $this->eventDispatcher->dispatch(CoucouEvent::NAME, new CoucouEvent());
//        $this->eventDispatcher->dispatch(UserCreatedEvent::NAME, new UserCreatedEvent($user));
//        echo($this->fileUploaderHelper->getImageFolder());

        $addArticleType = $this->formFactory->create(AddArticleType::class)->handleRequest($request);

        if($this->addArticleTypeHandler->handle($addArticleType)){
            return $homeResponder(true);
        }


        return $homeResponder(false, $addArticleType);
    }
}