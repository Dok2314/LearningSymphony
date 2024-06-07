<?php

namespace App\Services;

use App\Entity\Page;
use App\Repository\PageRepository;

class PageService
{
    private PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function createPage(string $keywords, string $description, string $title, string $content): Page
    {
        $page = new Page();
        $page->setKeywords($keywords)
            ->setDescription($description)
            ->setTitle($title)
            ->setContent($content);

        $this->pageRepository->save($page);

        return $page;
    }

    public function getHomePage(): ?Page
    {
        return $this->pageRepository->findHomePage();
    }
}
