<?php
/**
 * Created by PhpStorm.
 * User: Idealistick
 * Date: 22/06/2018
 * Time: 13:54
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Repository\XenomorphRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PagesController
 * @package App\Controller
 *
 * @Route("/pages")
 */
class PagesController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function index() : Response
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/vivarium", name="vivarium")
     */
    public function vivarium() : Response
    {
        return $this->render('pages/vivarium.html.twig');
    }

    /**
     * @Route("/food", name="food")
     */
    public function food() : Response
    {
        return $this->render('pages/food.html.twig');
    }

    /**
     * @Route("/shopping", name="shopping")
     */
    public function shopping() : Response
    {
        return $this->render('pages/shopping.html.twig');
    }

    /**
     * @Route("/profil", name="profil")
     */
     public function profil(UserRepository $userRepository): Response
     {
         return $this->render('pages/profil.html.twig', ['users' => $userRepository->findAll()]);
     }

     /**
      * @Route("/category", name="xeno_category")
      */
     public function category(XenomorphRepository $xenomorphRepository) : Response
     {
         return $this->render('pages/category.html.twig', ['xenomorphs' => $xenomorphRepository->findAll()]);
     }

    /**
     * @Route("/filter", name="xeno_filter")
     */
    public function filter(XenomorphRepository $xenomorphRepository) : Response
    {
        return $this->render('pages/filter.html.twig', ['xenomorphs' => $xenomorphRepository->findAll()]);
    }

    /**
     * @Route("/sheetXeno/{id}", name="xeno_sheet")
     */
    public function sheetXeno($id, XenomorphRepository $xenomorphRepository) : Response
    {
        return $this->render('pages/sheetXeno.html.twig', ['xenomorph' => $xenomorphRepository->find($id)]);
    }
}
