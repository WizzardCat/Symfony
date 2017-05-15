<?php

namespace CSJ\BlogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class imageController extends Controller
{
    public function indexAction()
    {
        return $this->render('CSJBlogBundle:Admin:Image:index.html.twig');
    }

}
