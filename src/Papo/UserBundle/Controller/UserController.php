<?php

namespace Papo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        return new Response('Welcome to the user module');
    }

    public function articlesAction($page)
    {
    	return new Response('This is a new Article ' . $page);
    }
}
