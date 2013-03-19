<?php

namespace MattCG\cjsDeliveryDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{


    /**
     * @Route("/hello/{name}", name="_cjsdeliverydemo")
     * @Template()
     */
    public function helloAction($name = 'Anonymous')
    {
        return array('name' => $name);
    }
}
