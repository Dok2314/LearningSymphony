<?php

namespace App\Controller;

use App\Services\VideoService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class VideoController extends AbstractController
{
    public function __construct(private readonly VideoService $videoService)
    {
    }

    public function myVideos(): Response
    {
        $videos = $this->videoService->getVideos();
        return $this->render('video/index.html.twig', compact('videos'));
    }

    public function showVideo($youtube_id)
    {
        $video = $this->videoService->findVideo($youtube_id);
        return $this->render('video/video.html.twig', compact('video'));
    }

    public function addVideo()
    {
        return $this->render('video/add_video.htm.twig');
    }

    public function store(Request $request)
    {

    }
}
