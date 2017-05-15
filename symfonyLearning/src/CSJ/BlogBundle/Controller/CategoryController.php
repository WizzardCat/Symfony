<?php

namespace CSJ\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function indexAction()
    {
        return $this->render('CSJBlogBundle:Category:index.html.twig');
    }

    public function categoryAction($slug)
    {
        return $this->render('CSJBlogBundle:Category:index.html.twig');
    }
}
