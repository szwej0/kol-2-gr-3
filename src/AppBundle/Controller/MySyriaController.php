<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MySyriaController extends Controller
{

    /**
     * @Route("/syria.html", name="syria")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Syria')->findAll();

        return $this->render(
            'default/syria.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}