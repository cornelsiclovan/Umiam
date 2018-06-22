<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 22/06/2018
 * Time: 09:41
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PlacesController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('places are here');
    }

    /**
     * @Route("/places/{slug}")
     */
    public function show($slug)
    {
        return $this->render('places/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug))
        ]);
    }
}