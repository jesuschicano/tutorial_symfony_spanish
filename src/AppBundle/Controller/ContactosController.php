<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* @Route("/contactos")
*/
class ContactosController extends Controller
{
    /**
     * @Route("/{page}",
     * defaults={"page": 1},
     * requirements={"page": "\d+"})
     */
    public function indexAction($page)
    {
      return new Response('página: '.$page);
    }

    /**
    * @Route("/{slug}")
    */
    public function showAction($slug)
    {
      return new Response('slug: '.$slug);
    }
}
