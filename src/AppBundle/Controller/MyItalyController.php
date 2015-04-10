<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyItalyController extends Controller
{

    /**
     * @Route("/italy.html", name="italy")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Italy')->findAll();

        return $this->render(
            'default/italy.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}