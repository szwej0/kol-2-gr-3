<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyLiberiaController extends Controller
{

    /**
     * @Route("/liberia.html", name="liberia")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Liberia')->findAll();

        return $this->render(
            'default/liberia.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}