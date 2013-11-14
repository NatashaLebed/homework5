<?php

namespace GeekHub\Homework5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekHubHomework5Bundle:Default:index.html.twig');
    }
}
