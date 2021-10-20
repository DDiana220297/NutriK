<?php

namespace CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CustomerController extends Controller
{
    public function newsAction()
    {
        return $this->render('@Customer/news.html.twig');
    }

    public function didacticContentAction()
    {
        return $this->render('@Customer/didactic-content.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('@Customer/about.html.twig');
    }

    public function servicesAction()
    {
        return $this->render('@Customer/services.html.twig');
    }

    public function personalDataAction(){
        return $this->render('@Customer/personal-data.html.twig');
    }

    public function diaryAction(){
        return $this->render('@Customer/diary.html.twig');
    }

    public function calendarAction(){
        return $this->render('@Customer/calendar.html.twig');
    }

    public function recipesAction(){
        return $this->render('@Customer/recipes.html.twig');
    }

    public function progressAction(){
        return $this->render('@Customer/progress.html.twig');
    }

    public function messengerAction(){
        return $this->render('@Customer/messenger-services.html.twig');
    }
}
