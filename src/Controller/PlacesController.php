<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 22/06/2018
 * Time: 09:41
 */

namespace App\Controller;


use App\Entity\Place;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PlacesController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(EntityManagerInterface $em)
    {
        $repository = $em->getRepository(Place::class);
        /** @var Place[] $places */
        $places = $repository->findAll();

        return $this->render('places/homepage.html.twig',[
            'places' => $places
        ]);

    }

    /**
     * @Route("/places/{slug}", name="place_show")
     */
    public function show($slug)
    {

        return $this->render('places/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug))
        ]);
    }

    /**
     * @Route("admin/place/new", name="new_place")
     */
    public function new(EntityManagerInterface $em)
    {
        $place = new Place();
        $place->setName("locatie 1")
            ->setSlug("locatie 1")
            ->setAddress("adresa locatie 1")
            ->setCity("Timisoara")
            ->setEmail("loc1@gmail.com")
            ->setTelNumber("078888999")
            ->setCountry("Romania")
            ->setWebsite("www.loc1.com");

        $em->persist($place);
        $em->flush();
        return new Response('place added');
    }
}