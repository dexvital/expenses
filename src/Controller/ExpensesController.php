<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExpensesController extends AbstractController
{
    /**
     * @Route("/", name="expenses")
     */
    public function index()
    {
        return $this->render('expenses/index.html.twig', [
            'controller_name' => 'ExpensesController',
        ]);
    }
}
