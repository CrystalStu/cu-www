<?php
/**
 * Created by PhpStorm.
 * User: turui
 * Date: 12/30/2017
 * Time: 2:21 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainPage extends Controller
{
    /**
     * @Route("/")
     */
    public function showAction() {
        $name = 'Hello!';
        return $this->render("hlw.html.twig");
    }
}