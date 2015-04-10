<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyMarokoController extends Controller
{

    /**
     * @Route("/maroko.html", name="maroko")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Maroko')->findAll();

        return $this->render(
            'default/maroko.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
