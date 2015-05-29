<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyAustriaController extends Controller
{

    /**
     * @Route("/Austria.html", name="Austria")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Austria')->findAll();

        return $this->render(
            'default/Austria.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}

