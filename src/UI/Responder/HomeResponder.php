<?php
namespace App\UI\Responder;
use App\UI\Responder\Interfaces\HomeResponderInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 11/05/18
 * Time: 21:46
 */
class HomeResponder implements HomeResponderInterface
{
    private $twig;

    public function __construct(Environment $environment)
    {
        $this->twig = $environment;
    }

    public function __invoke()
    {
        return new Response(
            $this->twig->render('default/index.html.twig')
        );
    }

}