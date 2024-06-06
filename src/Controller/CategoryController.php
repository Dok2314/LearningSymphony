<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('category/index.html.twig');
    }

    public function addCategory()
    {
        return $this->render('category/add_category.html.twig');
    }
}
