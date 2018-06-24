<?php
/**
 * Created by PhpStorm.
 * User: Idealistick
 * Date: 22/06/2018
 * Time: 13:54
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PagesController
{
    /**
     * @Route("/pages/index")
     */
    public function index(Environment $twig)
    {
        return new Response(
            $twig->render('pages/sheetXeno.html.twig')
        );
    }
}