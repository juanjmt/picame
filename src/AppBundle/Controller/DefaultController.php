<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('front/index.html.twig');
        /*return $this->render('front/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
    }
    /**
     * @Route("/nosotros", name="nosotros")
     */
    public function nosotrosAction(Request $request)
    {
        return $this->render('front/nosotros.html.twig');

    }
    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction(Request $request)
    {
        return $this->render('front/contacto.html.twig');

    }
    /**
     * @Route("/menu/{tipo}", name="menu")
     */
    public function menuAction(Request $request,$tipo='all')
    {
        return $this->render('front/menu.html.twig',array('tipo' => $tipo ));

    }


}
