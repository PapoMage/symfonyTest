<?php

namespace Papo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager(); //Permite acceder a los metodos y servicios de Doctrine

        $users = $em->getRepository('PapoUserBundle:User')->findAll(); //Permite acceder a todos los registros de la base de datos.
        $res = 'Lista de usuarios: <br />';

        foreach ($users as $user) {
        	$res .= 'Usuario: '. $user->getUsername(). ' - Email: '. $user->getEmail(). '<br />';
        }

        return new Response ($res);
    }

    public function viewAction($id)
    {
    	$repository = $this->getDoctrine()->getRepository('PapoUserBundle:User');

    	$user = $repository->find($id);

    	return new Response ('Usuario: '. $user->getUsername(). ' - Su email es: '. $user->getEmail());
    }

    public function articlesAction($page)
    {
    	return new Response('This is a new Article ' . $page);
    }
}
