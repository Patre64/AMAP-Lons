<?php

namespace App\Controller\Admin;

use App\Entity\Contrats;
use App\Form\ContratsType;
use App\Repository\ContratsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/contrats")
 */
class ContratsController extends AbstractController
{
    /**
     * @Route("/", name="contrats_index", methods="GET")
     */
    public function index(ContratsRepository $contratsRepository): Response
    {
        return $this->render('admin/contrats/index.html.twig', ['contrats' => $contratsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="contrats_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $contrat = new Contrats();
        $form = $this->createForm(ContratsType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contrat);
            $em->flush();

            return $this->redirectToRoute('contrats_index');
        }

        return $this->render('admin/contrats/new.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contrats_show", methods="GET")
     */
    public function show(Contrats $contrat): Response
    {
        return $this->render('admin/contrats/show.html.twig', ['contrat' => $contrat]);
    }

    /**
     * @Route("/{id}/edit", name="contrats_edit", methods="GET|POST")
     */
    public function edit(Request $request, Contrats $contrat): Response
    {
        $form = $this->createForm(ContratsType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contrats_edit', ['id' => $contrat->getId()]);
        }

        return $this->render('admin/contrats/edit.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contrats_delete", methods="DELETE")
     */
    public function delete(Request $request, Contrats $contrat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contrat->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contrat);
            $em->flush();
        }

        return $this->redirectToRoute('contrats_index');
    }
}
