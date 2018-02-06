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
     * @Route("/{page}", defaults={"page"=1})
     */
    public function indexAction($page)
    {
      // la URL de este controlador es "/contactos/{page}"
      // donde {page} puede ser cualquier cosa, por defecto es "1"
      // pero no funcionaría la ruta "/contactos"
      return new Response($page);
    }
}
