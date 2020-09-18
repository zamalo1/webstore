<?php


namespace App\Service;


use League\Flysystem\FilesystemInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadHelper
{
    const ARTICLE_IMAGE = 'article_image';

    private $filesystem;

    public function __construct(FilesystemInterface $filesystem)
    {
        $this->filesystem=$filesystem;
    }

}