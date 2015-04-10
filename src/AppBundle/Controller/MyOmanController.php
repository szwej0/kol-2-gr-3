<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyOmanController extends Controller
{

    /**
     * @Route("/oman.html", name="oman")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Oman')->findAll();

        return $this->render(
            'default/oman.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}