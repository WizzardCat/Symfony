<?php

namespace CSJ\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function indexAction()
    {
        return $this->render('CSJBlogBundle:Post:index.html.twig');
    }

    public function postAction($id)
    {
        return $this->render('CSJBlogBundle:Post:index.html.twig');
    }

}
