<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VideoController extends AbstractController
{
    public function myVideos(): Response
    {
        return $this->render('video/index.html.twig');
    }

    public function addVideo()
    {
        return $this->render('video/add_video.htm.twig');
    }
}
