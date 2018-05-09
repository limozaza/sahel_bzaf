<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 09/05/18
 * Time: 22:14
 */

namespace App\Controller;

use App\Controller\Interfaces\DefaultControllerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 *
 * @Route(
 *     path="/",
 *     name="homepage",
 *     methods={"GET"}
 *     )
 */
class DefaultController implements DefaultControllerInterface
{
    /**
     * @param Environment $environment
     * @return Response
     */
    public function __invoke(Environment $environment)
    {
        return new Response(
            $environment->render('default/index.html.twig')
        );
    }
}