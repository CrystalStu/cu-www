<?php
/**
 * Created by PhpStorm.
 * User: turui
 * Date: 1/2/2018
 * Time: 9:32 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutPage extends Controller
{
    /**
     * @Route("/about")
     */
    public function showAction() {
        return $this->render("about/index.html.twig");
    }
}