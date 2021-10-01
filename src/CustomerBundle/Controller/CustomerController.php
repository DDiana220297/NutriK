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
}
