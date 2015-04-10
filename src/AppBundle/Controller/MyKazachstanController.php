<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyKazachstanController extends Controller
{

    /**
     * @Route("/kazachstan.html", name="kazachstan")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Kazachstan')->findAll();

        return $this->render(
            'default/kazachstan.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}