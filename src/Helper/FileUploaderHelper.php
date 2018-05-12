<?php

namespace App\Helper;

class FileUploaderHelper
{
    private $imageFolder;

    public function __construct($imageFolder,$mail)
    {
        $this->imageFolder = $imageFolder." :: ".$mail;
    }

    /**
     * @return mixed
     */
    public function getImageFolder()
    {
        return $this->imageFolder;
    }
}