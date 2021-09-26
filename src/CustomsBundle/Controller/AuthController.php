<?php

namespace CustomsBundle\Controller;

use CustomsBundle\Entity\User;
use CustomsBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    public function loginAction(Request $request){
        $authenticationUtils = $this->get("security.authentication_utils");
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login.html.twig', array(
            "error" => $error,
            "last_username" => $lastUsername
        ));
    }

    public function registerAction(Request $request){
        $authenticationUtils = $this->get("security.authentication_utils");
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();


        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if($form->isValid()){
            $status = "El usuario se ha creado correctamente";
            $user->setFirstname($form->get("firstname")->getData());
            $user->setLastname($form->get("lastname")->getData());
            $user->setEmail($form->get("email")->getData());
            $user->setPassword($form->get("password")->getData());

            /*
             * Valores por defecto
             */
            $user->setIdGender(1);
            $user->setDateAdd(new \DateTime('NOW'));
            $user->setDateUpd(new \DateTime('NOW'));
            $user->setLastPasswordGen(new \DateTime('NOW'));

            /*
             * Guardamos el nuevo usuario en base de datos
             */
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $flush = $em->flush();
            if(!empty($flush)){
                $status = "KO";
            }
            else{
                return $this->redirectToRoute('login');
            }
        }
        else{
            $status = "OK";
        }


        return $this->render('register.html.twig', array(
            "error" => $error,
            "last_username" => $lastUsername,
            'form' => $form->createView(),
            'status' => $status,
        ));
    }
}
