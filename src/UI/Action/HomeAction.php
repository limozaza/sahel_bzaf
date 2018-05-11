<?php

namespace App\UI\Action;
use App\Helper\FileUploaderHelper;
use App\UI\Action\Interfaces\HomeActionInterface;
use App\UI\Responder\Interfaces\HomeResponderInterface;
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

    public function __construct(FileUploaderHelper $fileUploaderHelper)
    {
        $this->fileUploaderHelper = $fileUploaderHelper;
    }


    public function __invoke(HomeResponderInterface $homeResponder)
    {
        var_dump($this->fileUploaderHelper->getImageFolder());
        return $homeResponder();
    }
}