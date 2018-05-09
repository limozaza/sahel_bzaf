<?php
namespace App\Controller\Interfaces;
use Twig\Environment;

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 09/05/18
 * Time: 22:32
 */
interface DefaultControllerInterface
{
    public function __invoke(Environment $environment);
}