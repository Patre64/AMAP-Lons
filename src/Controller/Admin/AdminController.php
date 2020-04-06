<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Produit;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="base")
     */
    public function base()
    {
        return $this->redirectToRoute('dashboard');
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard()
    {
        $nb_user= $this->getDoctrine()->getRepository(User::class)->nbUser();
        $nb_produit= $this->getDoctrine()->getRepository(Produit::class)->nbProduit();
        //dd($nb_user);
        //dd($nb_produit);
        return $this->render('admin/dashboard.html.twig', ['nb'=>$nb_user[1],'np'=>$nb_produit[1]]);
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
        $toto = "cool";
        // dd("ok");
        dump($toto);

        return new Response("<body>ok</body>");
    }
}
