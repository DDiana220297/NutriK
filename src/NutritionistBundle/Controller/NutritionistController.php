<?php

namespace NutritionistBundle\Controller;

use CustomsBundle\Entity\User;
use CustomsBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class NutritionistController extends Controller
{
    private $session;

    public function __construct(){
        $this->session = new Session();
    }

    public function nutritionistAccountAction()
    {
        return $this->render('@Nutritionist/nutritionist-account.html.twig');
    }

    public function nutritionistPersonalDataAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        if($request->isMethod('POST')){
            /**
             * Instanciamos el user con el email del usuario logeado
             */
            $em = $this->getDoctrine()->getManager();
            $user_repository = $em->getRepository('CustomsBundle:User');
            $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));

            if(count($users) > 0){
                dump(reset($users));
                $user = reset($users);
                $password = $request->request->get('_password');
                $confirm_password = $request->request->get('_confirm_password');

                $update_data = true;
                if(isset($password) && $password != ""){
                    if($password != $confirm_password){
                        $this->session->getFlashBag()->add('updateNutritionistDataKOStatus',"Se ha producido un error. La contraseñas indicadas deben coincidir.");
                        $update_data = false;
                    }
                    else{
                        /**
                         * Cifrado de contraseña
                         */
                        $factory = $this->get('security.encoder_factory');
                        $encoder = $factory->getEncoder($user);
                        $password = $encoder->encodePassword($password, $this->getUser()->getSalt());
                        $user->setPassword($password);
                        $user->setLastPasswordGen(new \DateTime('NOW'));
                    }
                }
                if($update_data){
                    $user->setEmail($request->request->get('_email'));
                    $user->setDescription($request->request->get('_bibliografia'));
                    $user->setStudies($request->request->get('_estudios'));
                    $user->setCollegiate_Number($request->request->get('_n_colegiado'));
                    $user->setFirstname($request->request->get('_firstname'));
                    $user->setLastname($request->request->get('_lastname'));
                    $user->setIdGender($request->request->get('_nutritionistGender'));

                    if($request->request->get('_birthday') !== null && $request->request->get('_birthday') != ""){
                        $user->setBirthday(new \DateTime($request->request->get('_birthday')));
                    }

                    $user->setDateUpd(new \DateTime('NOW'));

                    /**
                     * Actualizamos los datos del usuario
                     */
                    $em->persist($user);
                    if(!empty($em->flush())){
                        $this->session->getFlashBag()->add('statusKOMessage', "No se ha podido registrar el usuario, intentalo de nuevo o contacta con nosotros.");
                    }
                    else{
                        $this->session->getFlashBag()->add('statusOKMessage',"El usuario se ha registrado correctamente, ya puedes iniciar sesión.");
                        return $this->redirectToRoute('login');
                    }
                }
            }
            else{
                $this->session->getFlashBag()->add('updateNutritionistDataKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, contactar con el servicio de NutriK.");
            }
        }
        return $this->render('@Nutritionist/nutritionist-personal-data.html.twig');
    }

    public function nutritionistDidacticContentAction()
    {
        return $this->render('@Nutritionist/nutritionist-didactic-content.html.twig');
    }

    public function nutritionistPaymentDataAction()
    {
        return $this->render('@Nutritionist/nutritionist-payment-data.html.twig');
    }

    public function nutritionistCalendarAction()
    {
        return $this->render('@Nutritionist/nutritionist-calendar.html.twig');
    }

    public function nutritionistAddCustomerAction()
    {
        return $this->render('@Nutritionist/add-customer.html.twig');
    }

    public function nutritionistCustomersAction()
    {
        return $this->render('@Nutritionist/nutritionist-customers.html.twig');
    }

    public function nutritionistDiaryAction()
    {
        return $this->render('@Nutritionist/nutritionist-diary.html.twig');
    }

    public function nutritionistEventsAction()
    {
        return $this->render('@Nutritionist/nutritionist-events.html.twig');
    }
    public function nutritionistPlansAction()
    {
        return $this->render('@Nutritionist/nutritionist-plans.html.twig');
    }
    public function nutritionistRecipesAction()
    {
        return $this->render('@Nutritionist/nutritionist-recipes.html.twig');
    }

    public function nutritionistScheduleAppointmentAction()
    {
        return $this->render('@Nutritionist/schedule-appointment.html.twig');
    }
}
