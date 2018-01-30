<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Pages extends Controller
{
    /**
     * @Route("/")
     */
    public function showMain() {
        return $this->render("index.html.twig");
    }

    /**
     * @Route("/about")
     */
    public function showAbout() {
        return $this->render("about/index.html.twig");
    }
}