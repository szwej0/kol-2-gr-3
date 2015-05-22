<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyBrazilController extends Controller
{

    /**
     * @Route("/brazil.html", name="brazil")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Brazil')->findAll();

        return $this->render(
            'default/brazil.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
