<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyRosjaController extends Controller
{

    /**
     * @Route("/rosja.html", name="rosja")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:rosja')->findAll();

        return $this->render(
            'default/rosja.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}

