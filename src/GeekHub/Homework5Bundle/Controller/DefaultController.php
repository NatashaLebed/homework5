<?php

namespace GeekHub\Homework5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekHubHomework5Bundle:Default:index.html.twig');
    }

    public function taskAction()
    {
         $tasks = array ('Read and understand Twig',
                       'Reed and use Assetic',
                       'Research about Bootstrap',
                       'Create base template of your application',
                       'Use assetic to add css and js to your templates',
                      );
        return $this->render('GeekHubHomework5Bundle:Default:task.html.twig', array('tasks' => $tasks));
    }

    public function contactAction()
    {
        $phone = '098 111 11 11';
        return $this->render('GeekHubHomework5Bundle:Default:contact.html.twig', array('phone' => $phone));
    }

    public function renderTaskAction()
    {
        return $this->render('GeekHubHomework5Bundle:Default:renderTask.html.twig');
    }

}