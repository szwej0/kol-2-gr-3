<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyGreeceController extends Controller
{

    /**
     * @Route("/greece.html", name="greece")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Greece')->findAll();

        return $this->render(
            'default/greece.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}