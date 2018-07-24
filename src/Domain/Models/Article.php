<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 12/05/18
 * Time: 21:52
 */

namespace App\Domain\Models;


class Article
{
    private $content;

    /**
     * Article constructor.
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }


}