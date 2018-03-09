<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $productions = $this->getDoctrine()->getRepository('App:Production')->findAll();
        return $this->render('home/index.html.twig', [
            'productions' => $productions
        ]);
    }
}
