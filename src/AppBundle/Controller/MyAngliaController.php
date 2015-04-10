<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyAngliaController extends Controller
{

    /**
     * @Route("/Anglia.html", name="Anglia")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Anglia')->findAll();

        return $this->render(
            'default/Anglia.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}

