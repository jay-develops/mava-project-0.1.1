<?php

namespace PlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/my")
     */
    public function indexAction()
    {
        return $this->render('PlayerBundle:Default:index.html.twig');
    }
}
