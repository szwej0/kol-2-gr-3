<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyJapanController extends Controller
{

    /**
     * @Route("/japan.html", name="japan")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Japan')->findAll();

        return $this->render(
            'default/japan.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
