<?php

namespace CSJ\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function indexAction()
    {
        return $this->render('CSJBlogBundle::menu.html.twig');
    }

}
