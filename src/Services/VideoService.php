<?php

namespace App\Services;

use App\Entity\Page;
use App\Repository\PageRepository;
use App\Repository\VideoRepository;

class VideoService
{
    private VideoRepository $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function getVideos(): array
    {
        return $this->videoRepository->getVideos();
    }

    public function findVideo($youtube_id)
    {
        return $this->videoRepository->findVideoByYoutubeId($youtube_id);
    }
}
