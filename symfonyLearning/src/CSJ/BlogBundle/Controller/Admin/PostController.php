<?php

namespace CSJ\BlogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PostController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager()
            ->getRepository('CSJBlogBundle:Post');
        $posts = $em->findAll();

        return $this->render('CSJBlogBundle:Admin\Post:index.html.twig', compact('posts'));
    }

    public function postAction($id)
    {
        return $this->render('CSJBlogBundle:Admin\Post:index.html.twig');
    }

    public function addAction()
    {
        return $this->render('CSJBlogBundle:Admin\Post:index.html.twig');
    }
    public function deleteAction($id)
    {
        return $this->render('CSJBlogBundle:Admin\Post:index.html.twig');
    }
    public function editAction($id)
    {
        return $this->render('CSJBlogBundle:Admin\Post:index.html.twig');
    }
}
