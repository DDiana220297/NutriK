<?php

namespace CustomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexOldAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository("CustomsBundle:Category");
        $categories = $repo->findAll();
        foreach ($categories as $category){
            echo "<p>" . $category->getName() . "</p>";
            $entries = $category->getEntries();
            foreach ($entries as $entry){
                echo $entry->getTitle().", ";
            }
        }

        return $this->render('@Customs/Default/index.html.twig');
    }

    public function indexAction(Request $request, $role){
        return $this->render('@Customs/Default/index.html.twig',
            [
                "role" => $role
            ]
        );
    }

    public function loginpageAction(){
        return $this->render('loginpagemodal.html.twig');
    }
}
