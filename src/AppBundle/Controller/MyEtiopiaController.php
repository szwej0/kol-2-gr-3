<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MyEtiopiaController extends Controller
{
    /**
     * @Route("/etiopia.html", name="etiopia")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Etiopia')->findAll();
        return $this->render(
            'default/etiopia.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }
}