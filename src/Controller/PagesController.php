<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_pages_index")
     */
    public function index(): Response
    {
        return $this->render("pages/pages.html.twig");
    }

    /**
     * @Route("/about", name="app_pages_about")
     */
    public function about(): Response
    {
        return $this->render("pages/about.html.twig");
    }
}
