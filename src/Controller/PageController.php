<?php

namespace App\Controller;

use App\Entity\Page;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function home(): Response
    {

        $page = new Page();
        $page->setKeywords('Любимые видео')
            ->setDescription('Любимые видео')
            ->setTitle('Любимые видео')
            ->setContent('Сайт для добавления видео и удобной разметки');

        $this->entityManager->persist($page);
        $this->entityManager->flush();

        return $this->render('page/index.html.twig');
    }
}
