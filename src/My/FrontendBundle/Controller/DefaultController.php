<?php

namespace My\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="czarnykotek")
     * @Template()
     */
    public function loremAction()
    {
        return array();
    }


    /**
     * @Route("/kolorowe/stworzenie.htm", name="niebieskimotylek")
     * @Template()
     */
    public function ipsumAction()
    {
        return array();
    }

    /**
     * @Route("/foo/bar/dolor", name="url_dolor")
     * @Template()
     */
    public function dolorAction()
    {
        return array();
    }

}
