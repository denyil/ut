<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/core", name="homepage2")
     */
    public function indexAction()
    {

        return $this->render('CoreBundle:Default:index.html.twig');
    }
}
