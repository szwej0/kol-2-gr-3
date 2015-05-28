<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyPortugalController extends Controller
{

    /**
     * @Route("/portugal.html", name="portugal")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Portugal')->findAll();

        return $this->render(
            'default/portugal.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
