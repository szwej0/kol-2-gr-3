<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyRomaniaController extends Controller
{

    /**
     * @Route("/romania.html", name="romania")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Romania')->findAll();

        return $this->render(
            'default/romania.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}