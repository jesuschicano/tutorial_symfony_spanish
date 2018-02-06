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
     * @Route("/{page}")
     */
    public function indexAction($page)
    {
      // la URL de este controlador es "/contactos/{page}"
      // donde {page} puede ser cualquier cosa
      return new Response($page);
    }
}
