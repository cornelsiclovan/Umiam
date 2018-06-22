<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 22/06/2018
 * Time: 09:41
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PlacesController
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
        return new Response(sprintf(
            'bla "%s"',
            $slug
            ));
    }
}