<?php

namespace CSJ\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CSJBlogBundle:Default:index.html.twig');
    }
}
