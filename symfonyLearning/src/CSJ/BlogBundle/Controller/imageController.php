<?php

namespace CSJ\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class imageController extends Controller
{
    public function indexAction()
    {
        return $this->render('CSJBlogBundle:Image:index.html.twig');
    }

}
