<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DaniaController extends Controller
{

    /**
     * @Route("/dania.html", name="dania")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Dania')->findAll();

        return $this->render(
            'default/dania.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
