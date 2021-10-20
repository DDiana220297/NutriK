<?php

namespace CustomsBundle\Controller;

use CustomsBundle\Entity\User;
use CustomsBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    private $session;

    public function __construct(){
        $this->session = new Session();
    }

    public function indexAction(){
        return $this->render('loginpagemodal.html.twig');
    }

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
        if($form->isSubmitted()){
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $user_repository = $em->getRepository('CustomsBundle:User');
                $users = $user_repository->findBy(array("email"=>$form->get("email")->getData()));

                if(count($users) == 0){
                    $status = "El usuario se ha creado correctamente";
                    $user->setFirstname($form->get("firstname")->getData());
                    $user->setLastname($form->get("lastname")->getData());
                    $user->setEmail($form->get("email")->getData());

                    /*
                     * Cifrado de contraseña
                     */
                    $factory = $this->get('security.encoder_factory');
                    $encoder = $factory->getEncoder($user);
                    $password = $encoder->encodePassword($form->get("password")->getData(), $user->getSalt());
                    $user->setPassword($password);

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
                    if(!empty($em->flush())){
                        $this->session->getFlashBag()->add('statusKOMessage', "No se ha podido registrar el usuario, intentalo de nuevo o contacta con nosotros.");
                    }
                    else{
                        $this->session->getFlashBag()->add('statusOKMessage',"El usuario se ha registrado correctamente, ya puedes iniciar sesión.");
                        return $this->redirectToRoute('login');
                    }
                }
                else{
                    $this->session->getFlashBag()->add('statusKOMessage', 'Ya extiste un usuario registrado con este email.');
                }

            }
            else{
                $this->session->getFlashBag()->add('statusKOMessage', "Se ha producido un error en la recopilacion de datos del formulario, intentalo de nuevo o contacta con nosotros.");
            }



        }

        return $this->render('register.html.twig', array(
            "error" => $error,
            "last_username" => $lastUsername,
            'form' => $form->createView()
        ));
    }
}
