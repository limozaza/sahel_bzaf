<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 12/05/18
 * Time: 21:12
 */

namespace App\UI\Form\Handler;


use Symfony\Component\Form\FormInterface;

class AddArticleTypeHandler
{
    public function handle(FormInterface $form)
    {
        if($form->isSubmitted() && $form->isValid())
        {
            dump($form->getData());
            return true;
        }
        return false;
    }
}