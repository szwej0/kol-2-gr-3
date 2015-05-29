<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyRiverController extends Controller
{

    /**
     * @Route("/rivers.html", name="rivers")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:River')->findAll();

        return $this->render(
            'default/rivers.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}