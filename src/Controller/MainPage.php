<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainPage extends Controller
{
    /**
     * @Route("/")
     */
    public function showAction() {
        return $this->render("index.html.twig");
    }
}