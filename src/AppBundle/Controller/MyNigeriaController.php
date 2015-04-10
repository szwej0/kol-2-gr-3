<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyNigeriaController extends Controller
{

    /**
     * @Route("/nigeria.html", name="nigeria")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Nigeria')->findAll();

        return $this->render(
            'default/nigeria.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
