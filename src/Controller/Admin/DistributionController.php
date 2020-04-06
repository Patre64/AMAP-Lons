<?php

namespace App\Controller\Admin;

use App\Entity\Distribution;
use App\Form\DistributionType;
use App\Repository\DistributionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/distribution")
 */
class DistributionController extends AbstractController
{
    /**
     * @Route("/", name="distribution_index", methods="GET")
     */
    public function index(DistributionRepository $distributionRepository): Response
    {
        // dd($distributionRepository->findAll());
        return $this->render('admin/distribution/index.html.twig', ['distributions' => $distributionRepository->findAll()]);
    }

    /**
     * @Route("/new", name="distribution_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $distribution = new Distribution();
        $form = $this->createForm(DistributionType::class, $distribution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($distribution);
            $em->flush();

            return $this->redirectToRoute('distribution_index');
        }

        return $this->render('admin/distribution/new.html.twig', [
            'distribution' => $distribution,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="distribution_show", methods="GET")
     */
    public function show(Distribution $distribution): Response
    {
        return $this->render('admin/distribution/show.html.twig', ['distribution' => $distribution]);
    }

    /**
     * @Route("/{id}/edit", name="distribution_edit", methods="GET|POST")
     */
    public function edit(Request $request, Distribution $distribution): Response
    {
        $form = $this->createForm(DistributionType::class, $distribution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('distribution_edit', ['id' => $distribution->getId()]);
        }

        return $this->render('admin/distribution/edit.html.twig', [
            'distribution' => $distribution,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="distribution_delete", methods="DELETE")
     */
    public function delete(Request $request, Distribution $distribution): Response
    {
        if ($this->isCsrfTokenValid('delete'.$distribution->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($distribution);
            $em->flush();
        }

        return $this->redirectToRoute('distribution_index');
    }
}
