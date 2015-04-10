<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyPeruController extends Controller
{

    /**
     * @Route("/peru.html", name="peru")
     */
    public function peruAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Peru')->findAll();

        return $this->render(
            'default/peru.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}