<?php

namespace NutritionistBundle\Controller;

use CustomsBundle\Entity\Entry;
use CustomsBundle\Entity\NutritionistCustomerCard;
use CustomsBundle\Entity\User;
use CustomsBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class NutritionistController extends Controller
{
    private $session;

    public function __construct(){
        $this->session = new Session();
    }

    /**
     * Fn que se encarga de renderizar las acciones en el apartado Mi Cuenta del perfil del nutricionista
     *
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistAccountAction()
    {
        return $this->render('@Nutritionist/nutritionist-account.html.twig');
    }

    /**
     * Fn que se encarga de renderizar los datos personales del perfil de nutricionista
     * asi como guardar cualquier tipo de modificaciones que se realicen sobre estos.
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function nutritionistPersonalDataAction(Request $request)
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
                        $this->session->getFlashBag()->add('updateNutritionistDataKOStatus', "No se han podido actualizar los datos personales, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('updateNutritionistDataOKStatus',"Los datos personales se han guardado correctamente");
                    }
                }
            }
            else{
                $this->session->getFlashBag()->add('updateNutritionistDataKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
            }
        }
        return $this->render('@Nutritionist/nutritionist-personal-data.html.twig');
    }


    /**
     * Fn que se encarga de renderizar los datos de pago de un nutricionista asi como de la creación de nuevos metodos de pago
     * el borrado, y listar los recibos asociados al usuario
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function nutritionistPaymentDataAction(Request $request)
    {
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $nc_cards = array();
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);

            /**
             * Save payment method
             */
            if($request->isMethod('POST')){


                $name = $request->request->get('_name');
                $card_number = $request->request->get('_card-number');
                $expiration_date = new \DateTime($request->request->get('_expiration-date'));

                if(isset($name) && $name != "" && isset($card_number) && $card_number != "" && isset($expiration_date) && $expiration_date != ""){
                    $nc_last_digits = (int)substr($card_number, -4);
                    $nc_exp_month = (int)$expiration_date->format('m');
                    $nc_exp_year = (int)$expiration_date->format('Y');

                    $nutritionistCard = new NutritionistCustomerCard();
                    $nutritionistCard->setIdUser($user->getIdUser());
                    $nutritionistCard->setName($name);
                    $nutritionistCard->setNcDigits($card_number);
                    $nutritionistCard->setNcLastDigits($nc_last_digits);
                    $nutritionistCard->setNcExpMonth($nc_exp_month);
                    $nutritionistCard->setNcExpYear($nc_exp_year);
                    $nutritionistCard->setActive(1);
                    $nutritionistCard->setBrand('VISA');
                    $nutritionistCard->setDateUpd(new \DateTime('NOW'));
                    $nutritionistCard->setDateAdd(new \DateTime('NOW'));

                    $em->persist($nutritionistCard);
                    $flush = $em->flush();
                    if(!empty($flush)){
                        $this->session->getFlashBag()->add('paymentDataKOStatus',"Se ha producido un error. No hemos podido guardar los datos bancarios, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('paymentDataOKStatus',"Los datos bancarios se han guardado correctamente.");
                    }
                }
                else{
                    $this->session->getFlashBag()->add('paymentDataKOStatus',"Debes indicar el nombre que aparece en la tarjeta bancaria, el número de la cuenta y la fecha de caducidad.");
                }
            }

            /**
             * List all payment methods associated to the logged user
             */
            $nc_cards_repo = $em->getRepository("CustomsBundle:NutritionistCustomerCard");
            $nc_cards = $nc_cards_repo->findBy(array("idUser" => $user->getIdUser()));

            /**
             * List all receipts
             */
            $receipts_repo = $em->getRepository("NutritionistBundle:NutritionistReceipt");
            $receipts = $receipts_repo->findBy(array("idUser" => $user->getIdUser()));

            foreach ($receipts as &$receipt){
                $customers = $user_repository->findBy(array("idUser" => $receipt->getIdCustomer()));
                $customer = reset($customers);
                $receipt->customer_name = $customer->getFirstname() . ' ' . $customer->getLastname();
            }

        }
        else{
            $this->session->getFlashBag()->add('paymentDataKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }


        return $this->render('@Nutritionist/nutritionist-payment-data.html.twig',
            [
                'nc_cards' => $nc_cards,
                'receipts' => $receipts,
            ]
        );
    }

    /**
     * Fn que se encarga de borrar un método de pago.
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function nutritionistPaymentDataDeleteAction(Request $request){
        if($request->isMethod('POST')){
            $id_card = $request->request->get('_card_delete');

            $em = $this->getDoctrine()->getManager();
            $nc_cards_repo = $em->getRepository("CustomsBundle:NutritionistCustomerCard");
            $nc_card = $nc_cards_repo->find($id_card);
            $em->remove($nc_card);
            $flush = $em->flush();
            if(!empty($flush)){
                $this->session->getFlashBag()->add('paymentDataKOStatus',"Se ha producido un error. No hemos podido borrar los datos bancarios, intentelo de nuevo o contacte con el servicio de NutriK.");
            }
            else{
                $this->session->getFlashBag()->add('paymentDataOKStatus',"Los datos bancarios se han borrado correctamente.");
            }
        }
        return $this->redirectToRoute('nutritionist_payment_data');
    }

    /**
     * Fn que se encarga de renderizar las entradas didacticas de un nutricionista
     *
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistDidacticContentAction()
    {

        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);
            $entries_repo = $em->getRepository("CustomsBundle:Entry");
            $entries = $entries_repo->findBy(array("idUser" => $user->getIdUser()));
        }
        else{
            $this->session->getFlashBag()->add('didacticContentKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-didactic-content.html.twig',
            [
                'entries' => $entries
            ]
        );
    }

    /**
     * Fn que se encarga de crear una entrada de contenido didactico
     *
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistAddDidacticContentAction(Request $request){
        $categories = array();

        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);

            /**
             * Consultamos las categorias
             */
            $categories_repo = $em->getRepository("CustomsBundle:Category");
            $categories = $categories_repo->findAll();

            if($request->isMethod('POST')){
                $title = $request->request->get('_title');
                $id_category = $request->request->get('_category');
                $description = $request->request->get('_description');
                $content = $request->request->get('_content');

                if(isset($title, $id_category, $description, $content) && $title != "" && $id_category != "" && $description != "" && $content != ""){
                    $entry = new Entry();
                    $entry->setTitle($title);

                    // It has to be an instance of User
                    $entry->setIdUser($user);

                    // It has to be an instance of Category
                    $category = $categories_repo->findBy(array("idCategory" => $id_category));
                    $entry->setIdCategory(reset($category));
                    $entry->setDescription($description);
                    $entry->setContent($content);
                    $entry->setActive(1);
                    $entry->setDateUpd(new \DateTime('NOW'));
                    $entry->setDateAdd(new \DateTime('NOW'));

                    $em->persist($entry);
                    $flush = $em->flush();
                    if(!empty($flush)){
                        $this->session->getFlashBag()->add('addDidacticContentKOStatus',"Se ha producido un error. No se ha podido crear el contenido, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('didacticContentOKStatus',"El contenido se ha guardado correctamente.");
                        return $this->redirectToRoute('nutritionist_didactic_content');
                    }
                }
                else{
                    $this->session->getFlashBag()->add('addDidacticContentKOStatus',"Se ha producido un error. Debes indicar el título de la entrada, la categoría, la descripción y el contenido, intentelo de nuevo o contacte con el servicio de NutriK.");
                }
            }
        }
        else{
            $this->session->getFlashBag()->add('addDidacticContentKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/add-didactic-content.html.twig',
            [
                "categories" => $categories
            ]
        );
    }

    public function nutritionistDeleteDidacticContentAction(Request $request){
        if($request->isMethod('POST')){
            $id_entry = $request->request->get('_entry_delete');

            $em = $this->getDoctrine()->getManager();
            $entries = $em->getRepository("CustomsBundle:Entry");
            $entry = $entries->find($id_entry);
            $em->remove($entry);
            $flush = $em->flush();
            if(!empty($flush)){
                $this->session->getFlashBag()->add('didacticContentKOStatus',"Se ha producido un error. No hemos podido borrar el contenido, intentelo de nuevo o contacte con el servicio de NutriK.");
            }
            else{
                $this->session->getFlashBag()->add('didacticContentOKStatus',"El contenido se ha borrado correctamente.");
            }
        }
        return $this->redirectToRoute('nutritionist_didactic_content');
    }


    public function nutritionistEditDidacticContentAction(Request $request, $id_entry){

        /**
         * Cargamos la entrada
         */
        $em = $this->getDoctrine()->getManager();
        $entries = $em->getRepository("CustomsBundle:Entry");
        $entry = $entries->find($id_entry);


        /**
         * Cargamos las categorias
         */
        $categories_repo = $em->getRepository("CustomsBundle:Category");
        $categories = $categories_repo->findAll();

        if($request->isMethod('POST')){

            $title = $request->request->get('_title');
            $id_category = $request->request->get('_category');
            $description = $request->request->get('_description');
            $content = $request->request->get('_content');


            $category = $categories_repo->findBy(array("idCategory" => $id_category));
            $entry->setIdCategory(reset($category));
            $entry->setTitle($title);
            $entry->setDescription($description);
            $entry->setContent($content);
            $entry->setDateUpd(new \DateTime('NOW'));

            $em->persist($entry);
            $flush = $em->flush();
            if(!empty($flush)){
                $this->session->getFlashBag()->add('editDidacticContentKOStatus',"Se ha producido un error. No se han podido guardar las modificaciones, intentelo de nuevo o contacte con el servicio de NutriK.");
            }
            else{
                $this->session->getFlashBag()->add('editDidacticContentOKStatus',"El contenido se ha guardado correctamente.");
            }
        }

        return $this->render('@Nutritionist/edit-didactic-content.html.twig',
            [
                "id_entry" => $id_entry,
                "entry" => $entry,
                "categories" => $categories
            ]
        );
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
