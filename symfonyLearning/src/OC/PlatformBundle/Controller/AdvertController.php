<?php

namespace OC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller

{

    public function indexAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:indexx.html.twig', array('nom' => 'Happy'));
        return new Response($content);

    }

}

