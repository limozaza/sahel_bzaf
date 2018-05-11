<?php

namespace App\Helper;


class FileUploaderHelper
{
    private $imageFolder;

    public function __construct($imageFolder)
    {
        $this->imageFolder = $imageFolder;
    }

    /**
     * @return mixed
     */
    public function getImageFolder()
    {
        return $this->imageFolder;
    }
}