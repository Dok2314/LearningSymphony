<?php

namespace App\Repository;

use App\Entity\Video;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Video>
 */
class VideoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Video::class);
    }

    public function getVideos(): array
    {
        return $this->findAll();
    }

    public function findVideoByYoutubeId(string $youtube_id): ?Video
    {
        return $this->findOneBy(['youtube_id' => $youtube_id]);
    }
}
