<?php

namespace CSJ\BlogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function indexAction()
    {
        return $this->render('CSJBlogBundle:Admin::menu.html.twig');
    }

}
