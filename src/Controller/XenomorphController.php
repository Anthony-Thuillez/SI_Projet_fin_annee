<?php

namespace App\Controller;

use App\Entity\Xenomorph;
use App\Form\XenomorphType;
use App\Repository\XenomorphRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/xenomorph")
 */
class XenomorphController extends Controller
{
    /**
     * @Route("/", name="xenomorph_index", methods="GET")
     */
    public function index(XenomorphRepository $xenomorphRepository): Response
    {
        return $this->render('xenomorph/index.html.twig', ['xenomorphs' => $xenomorphRepository->findAll()]);
    }

    /**
     * @Route("/new", name="xenomorph_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $xenomorph = new Xenomorph();
        $form = $this->createForm(XenomorphType::class, $xenomorph);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($xenomorph);
            $em->flush();

            return $this->redirectToRoute('xenomorph_index');
        }

        return $this->render('xenomorph/new.html.twig', [
            'xenomorph' => $xenomorph,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="xenomorph_show", methods="GET")
     */
    public function show(Xenomorph $xenomorph): Response
    {
        return $this->render('xenomorph/show.html.twig', ['xenomorph' => $xenomorph]);
    }

    /**
     * @Route("/{id}/edit", name="xenomorph_edit", methods="GET|POST")
     */
    public function edit(Request $request, Xenomorph $xenomorph): Response
    {
        $form = $this->createForm(XenomorphType::class, $xenomorph);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('xenomorph_edit', ['id' => $xenomorph->getId()]);
        }

        return $this->render('xenomorph/edit.html.twig', [
            'xenomorph' => $xenomorph,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="xenomorph_delete", methods="DELETE")
     */
    public function delete(Request $request, Xenomorph $xenomorph): Response
    {
        if ($this->isCsrfTokenValid('delete'.$xenomorph->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($xenomorph);
            $em->flush();
        }

        return $this->redirectToRoute('xenomorph_index');
    }
}
