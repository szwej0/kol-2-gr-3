<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyNetherlandsController extends Controller
{

    /**
     * @Route("/netherlands.html", name="netherlands")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Netherlands')->findAll();

        return $this->render(
            'default/netherlands.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}