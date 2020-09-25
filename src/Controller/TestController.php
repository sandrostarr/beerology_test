<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test")
     */
    public function indexAction()
    {
        return new Response('Hello, world!');
    }

    /**
     * @Route("/test/{id}")
     */
    public function viewAction($id)
    {
        return new Response('Hello, ' . $id);
    }
}