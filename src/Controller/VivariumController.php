<?php

namespace App\Controller;

use App\Entity\Vivarium;
use App\Form\VivariumType;
use App\Repository\VivariumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/vivarium")
 */
class VivariumController extends Controller
{
    /**
     * @Route("/", name="vivarium_index", methods="GET")
     */
    public function index(VivariumRepository $vivariumRepository): Response
    {
        return $this->render('vivarium/index.html.twig', ['vivaria' => $vivariumRepository->findAll()]);
    }

    /**
     * @Route("/new", name="vivarium_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $vivarium = new Vivarium();
        $form = $this->createForm(VivariumType::class, $vivarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vivarium);
            $em->flush();

            return $this->redirectToRoute('vivarium_index');
        }

        return $this->render('vivarium/new.html.twig', [
            'vivarium' => $vivarium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="vivarium_show", methods="GET")
     */
    public function show(Vivarium $vivarium): Response
    {
        return $this->render('vivarium/show.html.twig', ['vivarium' => $vivarium]);
    }

    /**
     * @Route("/{id}/edit", name="vivarium_edit", methods="GET|POST")
     */
    public function edit(Request $request, Vivarium $vivarium): Response
    {
        $form = $this->createForm(VivariumType::class, $vivarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vivarium_edit', ['id' => $vivarium->getId()]);
        }

        return $this->render('vivarium/edit.html.twig', [
            'vivarium' => $vivarium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="vivarium_delete", methods="DELETE")
     */
    public function delete(Request $request, Vivarium $vivarium): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vivarium->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vivarium);
            $em->flush();
        }

        return $this->redirectToRoute('vivarium_index');
    }
}
