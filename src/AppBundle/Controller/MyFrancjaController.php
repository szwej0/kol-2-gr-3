<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyFrancjaController extends Controller
{

    /**
     * @Route("/francja.html", name="francja")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Francja')->findAll();

        return $this->render(
            'default/francja.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}