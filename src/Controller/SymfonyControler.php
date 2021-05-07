<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SymfonyControler extends AbstractController
{
    public function home()
    {
        $task_list = ['Introduction',
                    'Training Overview',
                    'Symfony Setup',
                    'Symfony Create Page',
                    'Routing',
                    'Controller',
                    'Templates',
                    'Configuration',
                    'Forms',
                    'Database and Doctrine ORM',
                    'Services Container',
                    'Security',
                    'Logging',
                    'Validation',
                    'Bundles',
                    'Console',
                    'Translations',
                    'Easy Admin bundle'];
        return $this->render('/tutorial/index.html.twig',['task_list'=>$task_list]);
    }

}