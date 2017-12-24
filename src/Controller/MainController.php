<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * @Route("/www")
     */
    public function hlw()
    {
        return new Response(
            'Hello, World!'
        );
    }
}