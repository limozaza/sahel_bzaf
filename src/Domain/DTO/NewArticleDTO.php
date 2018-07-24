<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 12/05/18
 * Time: 21:48
 */

namespace App\Domain\DTO;


class NewArticleDTO
{
    public $content;

    /**
     * NewArticleDTO constructor.
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }


}