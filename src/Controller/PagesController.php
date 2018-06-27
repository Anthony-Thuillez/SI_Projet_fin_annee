<?php
/**
 * Created by PhpStorm.
 * User: Idealistick
 * Date: 22/06/2018
 * Time: 13:54
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Xenomorph;
use App\Form\XenomorphType;
use App\Repository\XenomorphRepository;
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
     * @Route("/index")
     */
    public function index() : Response
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/shopping")
     */
    public function shopping() : Response
    {
        return $this->render('pages/shopping.html.twig');
    }

    /**
     * @Route("/profil")
     */
    public function profil() : Response
    {
        return $this->render('pages/profil.html.twig');
    }

    /**
     * @Route("/filter")
     */
    public function filter(XenomorphRepository $xenomorphRepository) : Response
    {
        return $this->render('pages/filter.html.twig', ['xenomorphs' => $xenomorphRepository->findAll()]);
    }

    /**
     * @Route("/sheetXeno")
     */
    public function sheetXeno(XenomorphRepository $xenomorphRepository) : Response
    {
        return $this->render('pages/sheetXeno.html.twig', ['xenomorphs' => $xenomorphRepository->findAll()]);
    }
}
