<?php

namespace App\Controller;

use App\Services\PageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController
{
    public function __construct(private readonly PageService $pageService) {
    }

    public function home(): Response
    {
//        $this->pageService->createPage(
//            'Любимые видео',
//            'Любимые видео',
//            'Любимые видео',
//            'Сайт для добавления видео и удобной разметки'
//        );

        $homePage = $this->pageService->getHomePage();

        return $this->render('page/index.html.twig', compact('homePage'));
    }
}
