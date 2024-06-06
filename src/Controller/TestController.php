<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'a' => 45124
        ]);
    }
}
