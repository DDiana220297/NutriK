<?php

namespace NutritionistBundle\Controller;

use CustomsBundle\Entity\Entry;
use CustomsBundle\Entity\Logs;
use CustomsBundle\Entity\NutritionistCustomerCard;
use CustomsBundle\Entity\User;
use CustomsBundle\Form\UserType;
use CustomsBundle\Entity\CustomerMetrics;
use DateInterval;
use NutritionistBundle\Entity\Appointment;
use NutritionistBundle\Entity\CustomerNutritionist;
use NutritionistBundle\Entity\DiaryPages;
use NutritionistBundle\Entity\Event;
use NutritionistBundle\Entity\Ingredients;
use NutritionistBundle\Entity\IngredientsRecipes;
use NutritionistBundle\Entity\Meal;
use NutritionistBundle\Entity\Recipes;
use NutritionistBundle\Entity\WeeklyPlan;
use NutritionistBundle\Entity\Workout;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints\Date;

setlocale(LC_ALL, 'es_ES');

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
                        $this->addLog('add_didactic_content', $user->getIdUser(), "Nueva entrada didáctica creada: $title");
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

    /**
     * Fn que se encarga de la eliminacion de una entrada de contenido didactico
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
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
                $this->addLog('delete_didactic_content', $entry->getIdUser()->getIdUser(), "Se ha borrado una entrada en el contenido didáctico: ". $entry->getTitle());
            }
        }
        return $this->redirectToRoute('nutritionist_didactic_content');
    }


    /**
     * Fn que se encarga de la modificación de una entrada de contenido didactico
     *
     * @param Request $request
     * @param $id_entry
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
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
                $this->addLog('edit_didactic_content', $entry->getIdUser()->getIdUser(), "Entrada didáctica modificada: ". $entry->getTitle());
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

    /**
     * Fn que se encarga de listar las planificaciones semanales
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistPlansAction(Request $request){
        $weekly_plans = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);
            $weekly_plans_repo = $em->getRepository("NutritionistBundle:WeeklyPlan");
            $weekly_plans = $weekly_plans_repo->findBy(array("idUser" => $user->getIdUser()));
        }
        else{
            $this->session->getFlashBag()->add('weeklyPlanKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-plans.html.twig',
            [
                'weeklyPlans' => $weekly_plans
            ]
        );
    }

    /**
     * Fn que se encarga de la eliminacion de una planificacion semanal
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function nutritionistDeleteWeeklyPlanAction(Request $request){
        if($request->isMethod('POST')){
            $id_plan = $request->request->get('_plan_delete');

            $em = $this->getDoctrine()->getManager();
            $entries = $em->getRepository("NutritionistBundle:WeeklyPlan");
            $plan = $entries->find($id_plan);
            $em->remove($plan);
            $flush = $em->flush();
            if(!empty($flush)){
                $this->session->getFlashBag()->add('weeklyPlansKOStatus',"Se ha producido un error. No hemos podido borrar el plan semanal, intentelo de nuevo o contacte con el servicio de NutriK.");
            }
            else{
                /**
                 * Borramos los meals asociados
                 */
                $meals_repo = $em->getRepository("NutritionistBundle:Meal");
                $meals = $meals_repo->findBy(["idPlan" => $id_plan]);
                if(count($meals) > 0){
                    foreach($meals as $meal){
                        $em->remove($meal);
                        $em->flush();
                    }
                }

                /**
                 * Borramos los workouts asociados
                 */
                $workouts_repo = $em->getRepository("NutritionistBundle:Workout");
                $workouts = $workouts_repo->findBy(["idPlan" => $id_plan]);
                if(count($workouts) > 0){
                    foreach($workouts as $workout){
                        $em->remove($workout);
                        $em->flush();
                    }
                }

                $this->session->getFlashBag()->add('weeklyPlansOKStatus',"El plan semanal se ha borrado correctamente.");
                $this->addLog('delete_weekly_plan', $plan->getIdUser(), "Planificación semanal borrada: ". $plan->getTitle());
            }
        }
        return $this->redirectToRoute('nutritionist_plans');
    }

    /**
     * Fn que se encarga de la modificación de una planificacion semanal
     *
     * @param Request $request
     * @param $id_plan
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistEditWeeklyPlanAction(Request $request, $id_plan){

        /**
         * Cargamos la entrada
         */
        $em = $this->getDoctrine()->getManager();
        $entries = $em->getRepository("NutritionistBundle:WeeklyPlan");
        $plan = $entries->find($id_plan);

        /**
         * Cargamos los ejercicios
         */
        $em = $this->getDoctrine()->getManager();
        $exercises_repo = $em->getRepository("NutritionistBundle:Exercise");
        $exercises = $exercises_repo->findAll();

        /**
         * Cargamos los tags
         */
        $tags_repo = $em->getRepository("CustomsBundle:Tag");
        $tags = $tags_repo->findAll();

        /**
         * Cargamos los planes de alimentacion
         */
        $meals_repo = $em->getRepository("NutritionistBundle:Meal");

        /**
         * Desayunos
         */
        $monday_breakfast = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Desayuno", "day" => "Lunes"]);
        $tuesday_breakfast = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Desayuno", "day" => "Martes"]);
        $wednesday_breakfast = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Desayuno", "day" => "Miercoles"]);
        $thursday_breakfast = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Desayuno", "day" => "Jueves"]);
        $friday_breakfast = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Desayuno", "day" => "Viernes"]);
        $saturday_breakfast = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Desayuno", "day" => "Sabado"]);
        $sunday_breakfast = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Desayuno", "day" => "Domingo"]);

        /**
         * Snack
         */
        $monday_snack = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Snack", "day" => "Lunes"]);
        $tuesday_snack = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Snack", "day" => "Martes"]);
        $wednesday_snack = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Snack", "day" => "Miercoles"]);
        $thursday_snack = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Snack", "day" => "Jueves"]);
        $friday_snack = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Snack", "day" => "Viernes"]);
        $saturday_snack = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Snack", "day" => "Sabado"]);
        $sunday_snack = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Snack", "day" => "Domingo"]);

        /**
         * Almuerzos
         */
        $monday_lunch = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Almuerzo", "day" => "Lunes"]);
        $tuesday_lunch = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Almuerzo", "day" => "Martes"]);
        $wednesday_lunch = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Almuerzo", "day" => "Miercoles"]);
        $thursday_lunch = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Almuerzo", "day" => "Jueves"]);
        $friday_lunch = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Almuerzo", "day" => "Viernes"]);
        $saturday_lunch = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Almuerzo", "day" => "Sabado"]);
        $sunday_lunch = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Almuerzo", "day" => "Domingo"]);

        /**
         * Meriendas
         */
        $monday_afternoon = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Merienda", "day" => "Lunes"]);
        $tuesday_afternoon = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Merienda", "day" => "Martes"]);
        $wednesday_afternoon = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Merienda", "day" => "Miercoles"]);
        $thursday_afternoon = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Merienda", "day" => "Jueves"]);
        $friday_afternoon = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Merienda", "day" => "Viernes"]);
        $saturday_afternoon = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Merienda", "day" => "Sabado"]);
        $sunday_afternoon = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Merienda", "day" => "Domingo"]);

        /**
         * Cenas
         */
        $monday_dinner = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Cena", "day" => "Lunes"]);
        $tuesday_dinner = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Cena", "day" => "Martes"]);
        $wednesday_dinner = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Cena", "day" => "Miercoles"]);
        $thursday_dinner = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Cena", "day" => "Jueves"]);
        $friday_dinner = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Cena", "day" => "Viernes"]);
        $saturday_dinner = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Cena", "day" => "Sabado"]);
        $sunday_dinner = $meals_repo->findBy(["idPlan" => $id_plan, "mealSort" => "Cena", "day" => "Domingo"]);

        /**
         * Cargamos los entrenamientos
         */
        $workouts_repo = $em->getRepository("NutritionistBundle:Workout");
        $monday_workout = $workouts_repo->findBy(["idPlan" => $id_plan, "day" => "Lunes"]);
        $mondayWorkout = reset($monday_workout);
        $tuesday_workout = $workouts_repo->findBy(["idPlan" => $id_plan, "day" => "Martes"]);
        $tuesdayWorkout = reset($tuesday_workout);
        $wednesday_workout = $workouts_repo->findBy(["idPlan" => $id_plan, "day" => "Miercoles"]);
        $wednesdayWorkout = reset($wednesday_workout);
        $thursday_workout = $workouts_repo->findBy(["idPlan" => $id_plan, "day" => "Jueves"]);
        $thursdayWorkout = reset($thursday_workout);
        $friday_workout = $workouts_repo->findBy(["idPlan" => $id_plan, "day" => "Viernes"]);
        $fridayWorkout = reset($friday_workout);
        $saturday_workout = $workouts_repo->findBy(["idPlan" => $id_plan, "day" => "Sabado"]);
        $saturdayWorkout = reset($saturday_workout);
        $sunday_workout = $workouts_repo->findBy(["idPlan" => $id_plan, "day" => "Domingo"]);
        $sundayWorkout = reset($sunday_workout);


        if($request->isMethod('POST')){
            /**
             * Modificación de la planificacion semanal
             */
            /**
             * Cargamos el plan
             */
            $plans_repo = $em->getRepository("NutritionistBundle:WeeklyPlan");
            $plans = $plans_repo->findBy(["idPlan" => $id_plan]);
            if(count($plans) > 0) {
                $plan = reset($plans);

                $plan_days = 0;

                /**
                 * Monday meal
                 */
                $monday_meals = false;
                $monday_breakfast_hour = $request->request->get('breakfast_hour_monday');
                $monday_breakfast_menu = $request->request->get('breakfast_menu_monday');
                $monday_breakfast_list = $request->request->get('breakfast_list_monday');
                $monday_breakfast_comments = $request->request->get('breakfast_comments_monday');
                $monday_snack_hour = $request->request->get('snack_hour_monday');
                $monday_snack_menu = $request->request->get('snack_menu_monday');
                $monday_snack_list = $request->request->get('snack_list_monday');
                $monday_snack_comments = $request->request->get('snack_comments_monday');
                $monday_lunch_hour = $request->request->get('lunch_hour_monday');
                $monday_lunch_menu = $request->request->get('lunch_menu_monday');
                $monday_lunch_list = $request->request->get('lunch_list_monday');
                $monday_lunch_comments = $request->request->get('lunch_comments_monday');
                $monday_afternoon_hour = $request->request->get('afternoon_hour_monday');
                $monday_afternoon_menu = $request->request->get('afternoon_menu_monday');
                $monday_afternoon_list = $request->request->get('afternoon_list_monday');
                $monday_afternoon_comments = $request->request->get('afternoon_comments_monday');
                $monday_dinner_hour = $request->request->get('dinner_hour_monday');
                $monday_dinner_menu = $request->request->get('dinner_menu_monday');
                $monday_dinner_list = $request->request->get('dinner_list_monday');
                $monday_dinner_comments = $request->request->get('dinner_comments_monday');


                if ($monday_breakfast_hour != "" && $monday_breakfast_menu != "" && $monday_breakfast_list != "" &&
                    $monday_snack_hour != "" && $monday_snack_menu != "" && $monday_snack_list != "" &&
                    $monday_lunch_hour != "" && $monday_lunch_menu != "" && $monday_lunch_list != "" &&
                    $monday_afternoon_hour != "" && $monday_afternoon_menu != "" && $monday_afternoon_list != "" &&
                    $monday_dinner_hour != "" && $monday_dinner_menu != "" && $monday_dinner_list != "") {
                    $plan_days += 1;
                    $monday_meals = true;
                }

                /**
                 * Tuesday meal
                 */
                $tuesday_meals = false;
                $tuesday_breakfast_hour = $request->request->get('breakfast_hour_tuesday');
                $tuesday_breakfast_menu = $request->request->get('breakfast_menu_tuesday');
                $tuesday_breakfast_list = $request->request->get('breakfast_list_tuesday');
                $tuesday_breakfast_comments = $request->request->get('breakfast_comments_tuesday');
                $tuesday_snack_hour = $request->request->get('snack_hour_tuesday');
                $tuesday_snack_menu = $request->request->get('snack_menu_tuesday');
                $tuesday_snack_list = $request->request->get('snack_list_tuesday');
                $tuesday_snack_comments = $request->request->get('snack_comments_tuesday');
                $tuesday_lunch_hour = $request->request->get('lunch_hour_tuesday');
                $tuesday_lunch_menu = $request->request->get('lunch_menu_tuesday');
                $tuesday_lunch_list = $request->request->get('lunch_list_tuesday');
                $tuesday_lunch_comments = $request->request->get('lunch_comments_tuesday');
                $tuesday_afternoon_hour = $request->request->get('afternoon_hour_tuesday');
                $tuesday_afternoon_menu = $request->request->get('afternoon_menu_tuesday');
                $tuesday_afternoon_list = $request->request->get('afternoon_list_tuesday');
                $tuesday_afternoon_comments = $request->request->get('afternoon_comments_tuesday');
                $tuesday_dinner_hour = $request->request->get('dinner_hour_tuesday');
                $tuesday_dinner_menu = $request->request->get('dinner_menu_tuesday');
                $tuesday_dinner_list = $request->request->get('dinner_list_tuesday');
                $tuesday_dinner_comments = $request->request->get('dinner_comments_tuesday');


                if ($tuesday_breakfast_hour != "" && $tuesday_breakfast_menu != "" && $tuesday_breakfast_list != "" &&
                    $tuesday_snack_hour != "" && $tuesday_snack_menu != "" && $tuesday_snack_list != "" &&
                    $tuesday_lunch_hour != "" && $tuesday_lunch_menu != "" && $tuesday_lunch_list != "" &&
                    $tuesday_afternoon_hour != "" && $tuesday_afternoon_menu != "" && $tuesday_afternoon_list != "" &&
                    $tuesday_dinner_hour != "" && $tuesday_dinner_menu != "" && $tuesday_dinner_list != "") {
                    $plan_days += 1;
                    $tuesday_meals = true;
                }

                /**
                 * Wednesday meal
                 */
                $wednesday_meals = false;
                $wednesday_breakfast_hour = $request->request->get('breakfast_hour_wednesday');
                $wednesday_breakfast_menu = $request->request->get('breakfast_menu_wednesday');
                $wednesday_breakfast_list = $request->request->get('breakfast_list_wednesday');
                $wednesday_breakfast_comments = $request->request->get('breakfast_comments_wednesday');
                $wednesday_snack_hour = $request->request->get('snack_hour_wednesday');
                $wednesday_snack_menu = $request->request->get('snack_menu_wednesday');
                $wednesday_snack_list = $request->request->get('snack_list_wednesday');
                $wednesday_snack_comments = $request->request->get('snack_comments_wednesday');
                $wednesday_lunch_hour = $request->request->get('lunch_hour_wednesday');
                $wednesday_lunch_menu = $request->request->get('lunch_menu_wednesday');
                $wednesday_lunch_list = $request->request->get('lunch_list_wednesday');
                $wednesday_lunch_comments = $request->request->get('lunch_comments_wednesday');
                $wednesday_afternoon_hour = $request->request->get('afternoon_hour_wednesday');
                $wednesday_afternoon_menu = $request->request->get('afternoon_menu_wednesday');
                $wednesday_afternoon_list = $request->request->get('afternoon_list_wednesday');
                $wednesday_afternoon_comments = $request->request->get('afternoon_comments_wednesday');
                $wednesday_dinner_hour = $request->request->get('dinner_hour_wednesday');
                $wednesday_dinner_menu = $request->request->get('dinner_menu_wednesday');
                $wednesday_dinner_list = $request->request->get('dinner_list_wednesday');
                $wednesday_dinner_comments = $request->request->get('dinner_comments_wednesday');


                if ($wednesday_breakfast_hour != "" && $wednesday_breakfast_menu != "" && $wednesday_breakfast_list != "" &&
                    $wednesday_snack_hour != "" && $wednesday_snack_menu != "" && $wednesday_snack_list != "" &&
                    $wednesday_lunch_hour != "" && $wednesday_lunch_menu != "" && $wednesday_lunch_list != "" &&
                    $wednesday_afternoon_hour != "" && $wednesday_afternoon_menu != "" && $wednesday_afternoon_list != "" &&
                    $wednesday_dinner_hour != "" && $wednesday_dinner_menu != "" && $wednesday_dinner_list != "") {
                    $plan_days += 1;
                    $wednesday_meals = true;
                }

                /**
                 * Thursday meal
                 */
                $thursday_meals = false;
                $thursday_breakfast_hour = $request->request->get('breakfast_hour_thursday');
                $thursday_breakfast_menu = $request->request->get('breakfast_menu_thursday');
                $thursday_breakfast_list = $request->request->get('breakfast_list_thursday');
                $thursday_breakfast_comments = $request->request->get('breakfast_comments_thursday');
                $thursday_snack_hour = $request->request->get('snack_hour_thursday');
                $thursday_snack_menu = $request->request->get('snack_menu_thursday');
                $thursday_snack_list = $request->request->get('snack_list_thursday');
                $thursday_snack_comments = $request->request->get('snack_comments_thursday');
                $thursday_lunch_hour = $request->request->get('lunch_hour_thursday');
                $thursday_lunch_menu = $request->request->get('lunch_menu_thursday');
                $thursday_lunch_list = $request->request->get('lunch_list_thursday');
                $thursday_lunch_comments = $request->request->get('lunch_comments_thursday');
                $thursday_afternoon_hour = $request->request->get('afternoon_hour_thursday');
                $thursday_afternoon_menu = $request->request->get('afternoon_menu_thursday');
                $thursday_afternoon_list = $request->request->get('afternoon_list_thursday');
                $thursday_afternoon_comments = $request->request->get('afternoon_comments_thursday');
                $thursday_dinner_hour = $request->request->get('dinner_hour_thursday');
                $thursday_dinner_menu = $request->request->get('dinner_menu_thursday');
                $thursday_dinner_list = $request->request->get('dinner_list_thursday');
                $thursday_dinner_comments = $request->request->get('dinner_comments_thursday');


                if ($thursday_breakfast_hour != "" && $thursday_breakfast_menu != "" && $thursday_breakfast_list != "" &&
                    $thursday_snack_hour != "" && $thursday_snack_menu != "" && $thursday_snack_list != "" &&
                    $thursday_lunch_hour != "" && $thursday_lunch_menu != "" && $thursday_lunch_list != "" &&
                    $thursday_afternoon_hour != "" && $thursday_afternoon_menu != "" && $thursday_afternoon_list != "" &&
                    $thursday_dinner_hour != "" && $thursday_dinner_menu != "" && $thursday_dinner_list != "") {
                    $plan_days += 1;
                    $thursday_meals = true;
                }

                /**
                 * Friday meal
                 */
                $friday_meals = false;
                $friday_breakfast_hour = $request->request->get('breakfast_hour_friday');
                $friday_breakfast_menu = $request->request->get('breakfast_menu_friday');
                $friday_breakfast_list = $request->request->get('breakfast_list_friday');
                $friday_breakfast_comments = $request->request->get('breakfast_comments_friday');
                $friday_snack_hour = $request->request->get('snack_hour_friday');
                $friday_snack_menu = $request->request->get('snack_menu_friday');
                $friday_snack_list = $request->request->get('snack_list_friday');
                $friday_snack_comments = $request->request->get('snack_comments_friday');
                $friday_lunch_hour = $request->request->get('lunch_hour_friday');
                $friday_lunch_menu = $request->request->get('lunch_menu_friday');
                $friday_lunch_list = $request->request->get('lunch_list_friday');
                $friday_lunch_comments = $request->request->get('lunch_comments_friday');
                $friday_afternoon_hour = $request->request->get('afternoon_hour_friday');
                $friday_afternoon_menu = $request->request->get('afternoon_menu_friday');
                $friday_afternoon_list = $request->request->get('afternoon_list_friday');
                $friday_afternoon_comments = $request->request->get('afternoon_comments_friday');
                $friday_dinner_hour = $request->request->get('dinner_hour_friday');
                $friday_dinner_menu = $request->request->get('dinner_menu_friday');
                $friday_dinner_list = $request->request->get('dinner_list_friday');
                $friday_dinner_comments = $request->request->get('dinner_comments_friday');


                if ($friday_breakfast_hour != "" && $friday_breakfast_menu != "" && $friday_breakfast_list != "" &&
                    $friday_snack_hour != "" && $friday_snack_menu != "" && $friday_snack_list != "" &&
                    $friday_lunch_hour != "" && $friday_lunch_menu != "" && $friday_lunch_list != "" &&
                    $friday_afternoon_hour != "" && $friday_afternoon_menu != "" && $friday_afternoon_list != "" &&
                    $friday_dinner_hour != "" && $friday_dinner_menu != "" && $friday_dinner_list != "") {
                    $plan_days += 1;
                    $friday_meals = true;
                }

                /**
                 * Saturday meal
                 */
                $saturday_meals = false;
                $saturday_breakfast_hour = $request->request->get('breakfast_hour_saturday');
                $saturday_breakfast_menu = $request->request->get('breakfast_menu_saturday');
                $saturday_breakfast_list = $request->request->get('breakfast_list_saturday');
                $saturday_breakfast_comments = $request->request->get('breakfast_comments_saturday');
                $saturday_snack_hour = $request->request->get('snack_hour_saturday');
                $saturday_snack_menu = $request->request->get('snack_menu_saturday');
                $saturday_snack_list = $request->request->get('snack_list_saturday');
                $saturday_snack_comments = $request->request->get('snack_comments_saturday');
                $saturday_lunch_hour = $request->request->get('lunch_hour_saturday');
                $saturday_lunch_menu = $request->request->get('lunch_menu_saturday');
                $saturday_lunch_list = $request->request->get('lunch_list_saturday');
                $saturday_lunch_comments = $request->request->get('lunch_comments_saturday');
                $saturday_afternoon_hour = $request->request->get('afternoon_hour_saturday');
                $saturday_afternoon_menu = $request->request->get('afternoon_menu_saturday');
                $saturday_afternoon_list = $request->request->get('afternoon_list_saturday');
                $saturday_afternoon_comments = $request->request->get('afternoon_comments_saturday');
                $saturday_dinner_hour = $request->request->get('dinner_hour_saturday');
                $saturday_dinner_menu = $request->request->get('dinner_menu_saturday');
                $saturday_dinner_list = $request->request->get('dinner_list_saturday');
                $saturday_dinner_comments = $request->request->get('dinner_comments_saturday');


                if ($saturday_breakfast_hour != "" && $saturday_breakfast_menu != "" && $saturday_breakfast_list != "" &&
                    $saturday_snack_hour != "" && $saturday_snack_menu != "" && $saturday_snack_list != "" &&
                    $saturday_lunch_hour != "" && $saturday_lunch_menu != "" && $saturday_lunch_list != "" &&
                    $saturday_afternoon_hour != "" && $saturday_afternoon_menu != "" && $saturday_afternoon_list != "" &&
                    $saturday_dinner_hour != "" && $saturday_dinner_menu != "" && $saturday_dinner_list != "") {
                    $plan_days += 1;
                    $saturday_meals = true;
                }

                /**
                 * Sunday meal
                 */
                $sunday_meals = false;
                $sunday_breakfast_hour = $request->request->get('breakfast_hour_sunday');
                $sunday_breakfast_menu = $request->request->get('breakfast_menu_sunday');
                $sunday_breakfast_list = $request->request->get('breakfast_list_sunday');
                $sunday_breakfast_comments = $request->request->get('breakfast_comments_sunday');
                $sunday_snack_hour = $request->request->get('snack_hour_sunday');
                $sunday_snack_menu = $request->request->get('snack_menu_sunday');
                $sunday_snack_list = $request->request->get('snack_list_sunday');
                $sunday_snack_comments = $request->request->get('snack_comments_sunday');
                $sunday_lunch_hour = $request->request->get('lunch_hour_sunday');
                $sunday_lunch_menu = $request->request->get('lunch_menu_sunday');
                $sunday_lunch_list = $request->request->get('lunch_list_sunday');
                $sunday_lunch_comments = $request->request->get('lunch_comments_sunday');
                $sunday_afternoon_hour = $request->request->get('afternoon_hour_sunday');
                $sunday_afternoon_menu = $request->request->get('afternoon_menu_sunday');
                $sunday_afternoon_list = $request->request->get('afternoon_list_sunday');
                $sunday_afternoon_comments = $request->request->get('afternoon_comments_sunday');
                $sunday_dinner_hour = $request->request->get('dinner_hour_sunday');
                $sunday_dinner_menu = $request->request->get('dinner_menu_sunday');
                $sunday_dinner_list = $request->request->get('dinner_list_sunday');
                $sunday_dinner_comments = $request->request->get('dinner_comments_sunday');


                if ($sunday_breakfast_hour != "" && $sunday_breakfast_menu != "" && $sunday_breakfast_list != "" &&
                    $sunday_snack_hour != "" && $sunday_snack_menu != "" && $sunday_snack_list != "" &&
                    $sunday_lunch_hour != "" && $sunday_lunch_menu != "" && $sunday_lunch_list != "" &&
                    $sunday_afternoon_hour != "" && $sunday_afternoon_menu != "" && $sunday_afternoon_list != "" &&
                    $sunday_dinner_hour != "" && $sunday_dinner_menu != "" && $sunday_dinner_list != "") {
                    $plan_days += 1;
                    $sunday_meals = true;
                }

                if ($plan_days >= 5) {
                    $tag = $request->request->get('plan_tags');
                    if ($tag != "") {
                        $plan->setIdTag($tag);
                    }

                    $plan->setTitle($request->request->get('plan_title'));
                    $plan->setDescription($request->request->get('plan_description'));
                    $plan->setDateAdd(new \DateTime('NOW'));

                    $em->persist($plan);
                    $flush = $em->flush();
                    if (!empty($flush)) {
                        $this->session->getFlashBag()->add('addWeeklyPlanKOStatus', "Se ha producido un error. No se ha podido guardar el plan semanal, intentelo de nuevo o contacte con el servicio de NutriK");
                    } else {
                        /**
                         * Plan meals
                         */
                        if ($monday_meals) {
                            $mondayBreakfast = reset($monday_breakfast);
                            $mondayBreakfast->setHour($monday_breakfast_hour);
                            $mondayBreakfast->setMeal($monday_breakfast_menu);
                            $mondayBreakfast->setMealShoppingList($monday_breakfast_list);
                            $mondayBreakfast->setMealNotes($monday_breakfast_comments);
                            $em->persist($mondayBreakfast);
                            $em->flush();


                            $mondaySnack = reset($monday_snack);
                            $mondaySnack->setHour($monday_snack_hour);
                            $mondaySnack->setMeal($monday_snack_menu);
                            $mondaySnack->setMealShoppingList($monday_snack_list);
                            $mondaySnack->setMealNotes($monday_snack_comments);
                            $em->persist($mondaySnack);
                            $em->flush();

                            $mondayLunch = reset($monday_lunch);
                            $mondayLunch->setHour($monday_lunch_hour);
                            $mondayLunch->setMeal($monday_lunch_menu);
                            $mondayLunch->setMealShoppingList($monday_lunch_list);
                            $mondayLunch->setMealNotes($monday_lunch_comments);
                            $em->persist($mondayLunch);
                            $em->flush();

                            $mondayAfternoon = reset($monday_afternoon);
                            $mondayAfternoon->setHour($monday_afternoon_hour);
                            $mondayAfternoon->setMeal($monday_afternoon_menu);
                            $mondayAfternoon->setMealShoppingList($monday_afternoon_list);
                            $mondayAfternoon->setMealNotes($monday_afternoon_comments);
                            $em->persist($mondayAfternoon);
                            $em->flush();


                            $mondayDinner = reset($monday_dinner);
                            $mondayDinner->setHour($monday_dinner_hour);
                            $mondayDinner->setMeal($monday_dinner_menu);
                            $mondayDinner->setMealShoppingList($monday_dinner_list);
                            $mondayDinner->setMealNotes($monday_dinner_comments);
                            $em->persist($mondayDinner);
                            $em->flush();
                        }

                        if ($tuesday_meals) {
                            $tuesdayBreakfast = reset($tuesday_breakfast);
                            $tuesdayBreakfast->setHour($tuesday_breakfast_hour);
                            $tuesdayBreakfast->setMeal($tuesday_breakfast_menu);
                            $tuesdayBreakfast->setMealShoppingList($tuesday_breakfast_list);
                            $tuesdayBreakfast->setMealNotes($tuesday_breakfast_comments);
                            $em->persist($tuesdayBreakfast);
                            $em->flush();

                            $tuesdaySnack = reset($tuesday_snack);
                            $tuesdaySnack->setHour($tuesday_snack_hour);
                            $tuesdaySnack->setMeal($tuesday_snack_menu);
                            $tuesdaySnack->setMealShoppingList($tuesday_snack_list);
                            $tuesdaySnack->setMealNotes($tuesday_snack_comments);
                            $em->persist($tuesdaySnack);
                            $em->flush();

                            $tuesdayLunch = reset($tuesday_lunch);
                            $tuesdayLunch->setHour($tuesday_lunch_hour);
                            $tuesdayLunch->setMeal($tuesday_lunch_menu);
                            $tuesdayLunch->setMealShoppingList($tuesday_lunch_list);
                            $tuesdayLunch->setMealNotes($tuesday_lunch_comments);
                            $em->persist($tuesdayLunch);
                            $em->flush();

                            $tuesdayAfternoon = reset($tuesday_afternoon);
                            $tuesdayAfternoon->setHour($tuesday_afternoon_hour);
                            $tuesdayAfternoon->setMeal($tuesday_afternoon_menu);
                            $tuesdayAfternoon->setMealShoppingList($tuesday_afternoon_list);
                            $tuesdayAfternoon->setMealNotes($tuesday_afternoon_comments);
                            $em->persist($tuesdayAfternoon);
                            $em->flush();


                            $tuesdayDinner = reset($tuesday_dinner);
                            $tuesdayDinner->setHour($tuesday_dinner_hour);
                            $tuesdayDinner->setMeal($tuesday_dinner_menu);
                            $tuesdayDinner->setMealShoppingList($tuesday_dinner_list);
                            $tuesdayDinner->setMealNotes($tuesday_dinner_comments);
                            $em->persist($tuesdayDinner);
                            $em->flush();
                        }

                        if ($wednesday_meals) {
                            $wednesdayBreakfast = reset($wednesday_breakfast);
                            $wednesdayBreakfast->setHour($wednesday_breakfast_hour);
                            $wednesdayBreakfast->setMeal($wednesday_breakfast_menu);
                            $wednesdayBreakfast->setMealShoppingList($wednesday_breakfast_list);
                            $wednesdayBreakfast->setMealNotes($wednesday_breakfast_comments);
                            $em->persist($wednesdayBreakfast);
                            $em->flush();

                            $wednesdaySnack = reset($wednesday_snack);
                            $wednesdaySnack->setHour($wednesday_snack_hour);
                            $wednesdaySnack->setMeal($wednesday_snack_menu);
                            $wednesdaySnack->setMealShoppingList($wednesday_snack_list);
                            $wednesdaySnack->setMealNotes($wednesday_snack_comments);
                            $em->persist($wednesdaySnack);
                            $em->flush();

                            $wednesdayLunch = reset($wednesday_lunch);
                            $wednesdayLunch->setHour($wednesday_lunch_hour);
                            $wednesdayLunch->setMeal($wednesday_lunch_menu);
                            $wednesdayLunch->setMealShoppingList($wednesday_lunch_list);
                            $wednesdayLunch->setMealNotes($wednesday_lunch_comments);
                            $em->persist($wednesdayLunch);
                            $em->flush();

                            $wednesdayAfternoon = reset($wednesday_afternoon);
                            $wednesdayAfternoon->setHour($wednesday_afternoon_hour);
                            $wednesdayAfternoon->setMeal($wednesday_afternoon_menu);
                            $wednesdayAfternoon->setMealShoppingList($wednesday_afternoon_list);
                            $wednesdayAfternoon->setMealNotes($wednesday_afternoon_comments);
                            $em->persist($wednesdayAfternoon);
                            $em->flush();


                            $wednesdayDinner = reset($wednesday_dinner);
                            $wednesdayDinner->setHour($wednesday_dinner_hour);
                            $wednesdayDinner->setMeal($wednesday_dinner_menu);
                            $wednesdayDinner->setMealShoppingList($wednesday_dinner_list);
                            $wednesdayDinner->setMealNotes($wednesday_dinner_comments);
                            $em->persist($wednesdayDinner);
                            $em->flush();
                        }
                        if ($thursday_meals) {
                            $thursdayBreakfast = reset($thursday_breakfast);
                            $thursdayBreakfast->setHour($thursday_breakfast_hour);
                            $thursdayBreakfast->setMeal($thursday_breakfast_menu);
                            $thursdayBreakfast->setMealShoppingList($thursday_breakfast_list);
                            $thursdayBreakfast->setMealNotes($thursday_breakfast_comments);
                            $em->persist($thursdayBreakfast);
                            $em->flush();

                            $thursdaySnack = reset($thursday_snack);
                            $thursdaySnack->setHour($thursday_snack_hour);
                            $thursdaySnack->setMeal($thursday_snack_menu);
                            $thursdaySnack->setMealShoppingList($thursday_snack_list);
                            $thursdaySnack->setMealNotes($thursday_snack_comments);
                            $em->persist($thursdaySnack);
                            $em->flush();

                            $thursdayLunch = reset($thursday_lunch);
                            $thursdayLunch->setHour($thursday_lunch_hour);
                            $thursdayLunch->setMeal($thursday_lunch_menu);
                            $thursdayLunch->setMealShoppingList($thursday_lunch_list);
                            $thursdayLunch->setMealNotes($thursday_lunch_comments);
                            $em->persist($thursdayLunch);
                            $em->flush();

                            $thursdayAfternoon = reset($thursday_afternoon);
                            $thursdayAfternoon->setHour($thursday_afternoon_hour);
                            $thursdayAfternoon->setMeal($thursday_afternoon_menu);
                            $thursdayAfternoon->setMealShoppingList($thursday_afternoon_list);
                            $thursdayAfternoon->setMealNotes($thursday_afternoon_comments);
                            $em->persist($thursdayAfternoon);
                            $em->flush();


                            $thursdayDinner = reset($thursday_dinner);
                            $thursdayDinner->setHour($thursday_dinner_hour);
                            $thursdayDinner->setMeal($thursday_dinner_menu);
                            $thursdayDinner->setMealShoppingList($thursday_dinner_list);
                            $thursdayDinner->setMealNotes($thursday_dinner_comments);
                            $em->persist($thursdayDinner);
                            $em->flush();
                        }
                        if ($friday_meals) {
                            $fridayBreakfast = reset($friday_breakfast);
                            $fridayBreakfast->setHour($friday_breakfast_hour);
                            $fridayBreakfast->setMeal($friday_breakfast_menu);
                            $fridayBreakfast->setMealShoppingList($friday_breakfast_list);
                            $fridayBreakfast->setMealNotes($friday_breakfast_comments);
                            $em->persist($fridayBreakfast);
                            $em->flush();

                            $fridaySnack = reset($friday_snack);
                            $fridaySnack->setHour($friday_snack_hour);
                            $fridaySnack->setMeal($friday_snack_menu);
                            $fridaySnack->setMealShoppingList($friday_snack_list);
                            $fridaySnack->setMealNotes($friday_snack_comments);
                            $em->persist($fridaySnack);
                            $em->flush();

                            $fridayLunch = reset($friday_lunch);
                            $fridayLunch->setHour($friday_lunch_hour);
                            $fridayLunch->setMeal($friday_lunch_menu);
                            $fridayLunch->setMealShoppingList($friday_lunch_list);
                            $fridayLunch->setMealNotes($friday_lunch_comments);
                            $em->persist($fridayLunch);
                            $em->flush();

                            $fridayAfternoon = reset($friday_afternoon);
                            $fridayAfternoon->setHour($friday_afternoon_hour);
                            $fridayAfternoon->setMeal($friday_afternoon_menu);
                            $fridayAfternoon->setMealShoppingList($friday_afternoon_list);
                            $fridayAfternoon->setMealNotes($friday_afternoon_comments);
                            $em->persist($fridayAfternoon);
                            $em->flush();

                            $fridayDinner = reset($friday_dinner);
                            $fridayDinner->setHour($friday_dinner_hour);
                            $fridayDinner->setMeal($friday_dinner_menu);
                            $fridayDinner->setMealShoppingList($friday_dinner_list);
                            $fridayDinner->setMealNotes($friday_dinner_comments);
                            $em->persist($fridayDinner);
                            $em->flush();
                        }
                        if ($saturday_meals) {
                            $saturdayBreakfast = reset($saturday_breakfast);
                            $saturdayBreakfast->setHour($saturday_breakfast_hour);
                            $saturdayBreakfast->setMeal($saturday_breakfast_menu);
                            $saturdayBreakfast->setMealShoppingList($saturday_breakfast_list);
                            $saturdayBreakfast->setMealNotes($saturday_breakfast_comments);
                            $em->persist($saturdayBreakfast);
                            $em->flush();

                            $saturdaySnack = reset($saturday_snack);
                            $saturdaySnack->setHour($saturday_snack_hour);
                            $saturdaySnack->setMeal($saturday_snack_menu);
                            $saturdaySnack->setMealShoppingList($saturday_snack_list);
                            $saturdaySnack->setMealNotes($saturday_snack_comments);
                            $em->persist($saturdaySnack);
                            $em->flush();

                            $saturdayLunch = reset($saturday_lunch);
                            $saturdayLunch->setHour($saturday_lunch_hour);
                            $saturdayLunch->setMeal($saturday_lunch_menu);
                            $saturdayLunch->setMealShoppingList($saturday_lunch_list);
                            $saturdayLunch->setMealNotes($saturday_lunch_comments);
                            $em->persist($saturdayLunch);
                            $em->flush();

                            $saturdayAfternoon = reset($saturday_afternoon);
                            $saturdayAfternoon->setHour($saturday_afternoon_hour);
                            $saturdayAfternoon->setMeal($saturday_afternoon_menu);
                            $saturdayAfternoon->setMealShoppingList($saturday_afternoon_list);
                            $saturdayAfternoon->setMealNotes($saturday_afternoon_comments);
                            $em->persist($saturdayAfternoon);
                            $em->flush();


                            $saturdayDinner = reset($saturday_dinner);
                            $saturdayDinner->setHour($saturday_dinner_hour);
                            $saturdayDinner->setMeal($saturday_dinner_menu);
                            $saturdayDinner->setMealShoppingList($saturday_dinner_list);
                            $saturdayDinner->setMealNotes($saturday_dinner_comments);
                            $em->persist($saturdayDinner);
                            $em->flush();
                        }
                        if ($sunday_meals) {
                            $sundayBreakfast = reset($sunday_breakfast);
                            $sundayBreakfast->setHour($sunday_breakfast_hour);
                            $sundayBreakfast->setMeal($sunday_breakfast_menu);
                            $sundayBreakfast->setMealShoppingList($sunday_breakfast_list);
                            $sundayBreakfast->setMealNotes($sunday_breakfast_comments);
                            $em->persist($sundayBreakfast);
                            $em->flush();

                            $sundaySnack = reset($sunday_snack);
                            $sundaySnack->setHour($sunday_snack_hour);
                            $sundaySnack->setMeal($sunday_snack_menu);
                            $sundaySnack->setMealShoppingList($sunday_snack_list);
                            $sundaySnack->setMealNotes($sunday_snack_comments);
                            $em->persist($sundaySnack);
                            $em->flush();

                            $sundayLunch = reset($sunday_lunch);
                            $sundayLunch->setHour($sunday_lunch_hour);
                            $sundayLunch->setMeal($sunday_lunch_menu);
                            $sundayLunch->setMealShoppingList($sunday_lunch_list);
                            $sundayLunch->setMealNotes($sunday_lunch_comments);
                            $em->persist($sundayLunch);
                            $em->flush();

                            $sundayAfternoon = reset($sunday_afternoon);
                            $sundayAfternoon->setHour($sunday_afternoon_hour);
                            $sundayAfternoon->setMeal($sunday_afternoon_menu);
                            $sundayAfternoon->setMealShoppingList($sunday_afternoon_list);
                            $sundayAfternoon->setMealNotes($sunday_afternoon_comments);
                            $em->persist($sundayAfternoon);
                            $em->flush();


                            $sundayDinner = reset($sunday_dinner);
                            $sundayDinner->setHour($sunday_dinner_hour);
                            $sundayDinner->setMeal($sunday_dinner_menu);
                            $sundayDinner->setMealShoppingList($sunday_dinner_list);
                            $sundayDinner->setMealNotes($sunday_dinner_comments);
                            $em->persist($sundayDinner);
                            $em->flush();
                        }


                        /**
                         * Monday workout
                         */
                        $monday_workout_rest = $request->request->get('monday_workout_rest');
                        if (!$monday_workout_rest) {
                            $monday_workout_sort = $request->request->get('monday_workout_sort');
                            $monday_workout = $request->request->get('monday_workout');
                            $monday_workout_exercises = $request->request->get('monday_workout_exercises');
                            if ($monday_workout_sort != "" && $monday_workout != "" && $monday_workout_exercises != "") {
                                $monday_workout_time = $request->request->get('monday_workout_time');
                                $monday_workout_time = new \DateTime($monday_workout_time);
                                $monday_workout_notes = $request->request->get('monday_workout_notes');
                                $monday_workout_exercises = implode(',', array_keys($monday_workout_exercises));

                                if ($monday_workout_time == "" || $monday_workout_notes == "") {
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings', "Advertencia. Faltan datos relacionados con el entrenamiento del Lunes para este plan semanal");
                                }

                                if($mondayWorkout == false){
                                    $mondayWorkout = new Workout();
                                    $mondayWorkout->setIdPlan($plan->getIdPlan());
                                    $mondayWorkout->setWorkoutSort($monday_workout_sort);
                                    $mondayWorkout->setDay('Lunes');
                                    $mondayWorkout->setDateAdd(new \DateTime('NOW'));
                                    $mondayWorkout->setHour($monday_workout_time->format('H:i:s'));
                                    $mondayWorkout->setWorkout($monday_workout);
                                    $mondayWorkout->setWorkoutExercises($monday_workout_exercises);
                                    $mondayWorkout->setWorkoutNotes($monday_workout_notes);
                                    $em->persist($mondayWorkout);
                                    $em->flush();
                                }
                                else{

                                    $mondayWorkout->setHour($monday_workout_time);
                                    $mondayWorkout->setWorkout($monday_workout);
                                    $mondayWorkout->setWorkoutExercises($monday_workout_exercises);
                                    $mondayWorkout->setWorkoutNotes($monday_workout_notes);
                                    $em->persist($mondayWorkout);
                                    $em->flush();
                                }
                            }
                        }

                        /**
                         * Tuesday workout
                         */
                        $tuesday_workout_rest = $request->request->get('tuesday_workout_rest');
                        if (!$tuesday_workout_rest) {
                            $tuesday_workout_sort = $request->request->get('tuesday_workout_sort');
                            $tuesday_workout = $request->request->get('tuesday_workout');
                            $tuesday_workout_exercises = $request->request->get('tuesday_workout_exercises');
                            if ($tuesday_workout_sort != "" && $tuesday_workout != "" && $tuesday_workout_exercises != "") {
                                $tuesday_workout_time = $request->request->get('tuesday_workout_time');
                                $tuesday_workout_time = new \DateTime($tuesday_workout_time);
                                $tuesday_workout_notes = $request->request->get('tuesday_workout_notes');
                                $tuesday_workout_exercises = implode(',', array_keys($tuesday_workout_exercises));

                                if ($tuesday_workout_time == "" || $tuesday_workout_notes == "") {
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings', "Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                if($tuesdayWorkout == false){
                                    $tuesdayWorkout = new Workout();
                                    $tuesdayWorkout->setIdPlan($plan->getIdPlan());
                                    $tuesdayWorkout->setWorkoutSort($tuesday_workout_sort);
                                    $tuesdayWorkout->setDay('Martes');
                                    $tuesdayWorkout->setDateAdd(new \DateTime('NOW'));
                                    $tuesdayWorkout->setHour($tuesday_workout_time);
                                    $tuesdayWorkout->setWorkout($tuesday_workout);
                                    $tuesdayWorkout->setWorkoutExercises($tuesday_workout_exercises);
                                    $tuesdayWorkout->setWorkoutNotes($tuesday_workout_notes);
                                    $em->persist($tuesdayWorkout);
                                    $em->flush();
                                }
                                else{
                                    $tuesdayWorkout->setHour($tuesday_workout_time);
                                    $tuesdayWorkout->setWorkout($tuesday_workout);
                                    $tuesdayWorkout->setWorkoutExercises($tuesday_workout_exercises);
                                    $tuesdayWorkout->setWorkoutNotes($tuesday_workout_notes);
                                    $em->persist($tuesdayWorkout);
                                    $em->flush();
                                }
                            }
                        }

                        /**
                         * Wednesday workout
                         */
                        $wednesday_workout_rest = $request->request->get('wednesday_workout_rest');
                        if (!$wednesday_workout_rest) {
                            $wednesday_workout_sort = $request->request->get('wednesday_workout_sort');
                            $wednesday_workout = $request->request->get('wednesday_workout');
                            $wednesday_workout_exercises = $request->request->get('wednesday_workout_exercises');
                            if ($wednesday_workout_sort != "" && $wednesday_workout != "" && $wednesday_workout_exercises != "") {
                                $wednesday_workout_time = $request->request->get('wednesday_workout_time');
                                $wednesday_workout_time = new \DateTime($wednesday_workout_time);
                                $wednesday_workout_notes = $request->request->get('wednesday_workout_notes');
                                $wednesday_workout_exercises = implode(',', array_keys($wednesday_workout_exercises));

                                if ($wednesday_workout_time == "" || $wednesday_workout_notes == "") {
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings', "Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                if($wednesdayWorkout == false){
                                    $wednesdayWorkout = new Workout();
                                    $wednesdayWorkout->setIdPlan($plan->getIdPlan());
                                    $wednesdayWorkout->setWorkoutSort($wednesday_workout_sort);
                                    $wednesdayWorkout->setDay('Miercoles');
                                    $wednesdayWorkout->setDateAdd(new \DateTime('NOW'));
                                    $wednesdayWorkout->setHour($wednesday_workout_time);
                                    $wednesdayWorkout->setWorkout($wednesday_workout);
                                    $wednesdayWorkout->setWorkoutExercises($wednesday_workout_exercises);
                                    $wednesdayWorkout->setWorkoutNotes($wednesday_workout_notes);
                                    $em->persist($wednesdayWorkout);
                                    $em->flush();
                                }
                                else{
                                    $wednesdayWorkout->setHour($wednesday_workout_time);
                                    $wednesdayWorkout->setWorkout($wednesday_workout);
                                    $wednesdayWorkout->setWorkoutExercises($wednesday_workout_exercises);
                                    $wednesdayWorkout->setWorkoutNotes($wednesday_workout_notes);
                                    $em->persist($wednesdayWorkout);
                                    $em->flush();
                                }

                            }
                        }

                        /**
                         * Thursday workout
                         */
                        $thursday_workout_rest = $request->request->get('thursday_workout_rest');
                        if (!$thursday_workout_rest) {
                            $thursday_workout_sort = $request->request->get('thursday_workout_sort');
                            $thursday_workout = $request->request->get('thursday_workout');
                            $thursday_workout_exercises = $request->request->get('thursday_workout_exercises');
                            if ($thursday_workout_sort != "" && $thursday_workout != "" && $thursday_workout_exercises != "") {
                                $thursday_workout_time = $request->request->get('thursday_workout_time');
                                $thursday_workout_time = new \DateTime($thursday_workout_time);
                                $thursday_workout_notes = $request->request->get('thursday_workout_notes');
                                $thursday_workout_exercises = implode(',', array_keys($thursday_workout_exercises));

                                if ($thursday_workout_time == "" || $thursday_workout_notes == "") {
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings', "Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                if($thursdayWorkout == false){
                                    $thursdayWorkout = new Workout();
                                    $thursdayWorkout->setIdPlan($plan->getIdPlan());
                                    $thursdayWorkout->setWorkoutSort($thursday_workout_sort);
                                    $thursdayWorkout->setDay('Jueves');
                                    $thursdayWorkout->setDateAdd(new \DateTime('NOW'));
                                    $thursdayWorkout->setHour($thursday_workout_time);
                                    $thursdayWorkout->setWorkout($thursday_workout);
                                    $thursdayWorkout->setWorkoutExercises($thursday_workout_exercises);
                                    $thursdayWorkout->setWorkoutNotes($thursday_workout_notes);
                                    $em->persist($thursdayWorkout);
                                    $em->flush();
                                }
                                else{
                                    $thursdayWorkout->setHour($thursday_workout_time);
                                    $thursdayWorkout->setWorkout($thursday_workout);
                                    $thursdayWorkout->setWorkoutExercises($thursday_workout_exercises);
                                    $thursdayWorkout->setWorkoutNotes($thursday_workout_notes);
                                    $em->persist($thursdayWorkout);
                                    $em->flush();
                                }
                            }
                        }

                        /**
                         * Friday workout
                         */
                        $friday_workout_rest = $request->request->get('friday_workout_rest');
                        if (!$friday_workout_rest) {
                            $friday_workout_sort = $request->request->get('friday_workout_sort');
                            $friday_workout = $request->request->get('friday_workout');
                            $friday_workout_exercises = $request->request->get('friday_workout_exercises');
                            if ($friday_workout_sort != "" && $friday_workout != "" && $friday_workout_exercises != "") {
                                $friday_workout_time = $request->request->get('friday_workout_time');
                                $friday_workout_time = new \DateTime($friday_workout_time);
                                $friday_workout_notes = $request->request->get('friday_workout_notes');
                                $friday_workout_exercises = implode(',', array_keys($friday_workout_exercises));

                                if ($friday_workout_time == "" || $friday_workout_notes == "") {
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings', "Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                if($fridayWorkout == false){
                                    $fridayWorkout = new Workout();
                                    $fridayWorkout->setIdPlan($plan->getIdPlan());
                                    $fridayWorkout->setWorkoutSort($friday_workout_sort);
                                    $fridayWorkout->setDay('Viernes');
                                    $fridayWorkout->setDateAdd(new \DateTime('NOW'));
                                    $fridayWorkout->setHour($friday_workout_time);
                                    $fridayWorkout->setWorkout($friday_workout);
                                    $fridayWorkout->setWorkoutExercises($friday_workout_exercises);
                                    $fridayWorkout->setWorkoutNotes($friday_workout_notes);
                                    $em->persist($fridayWorkout);
                                    $em->flush();
                                }
                                else{
                                    $fridayWorkout->setHour($friday_workout_time);
                                    $fridayWorkout->setWorkout($friday_workout);
                                    $fridayWorkout->setWorkoutExercises($friday_workout_exercises);
                                    $fridayWorkout->setWorkoutNotes($friday_workout_notes);
                                    $em->persist($fridayWorkout);
                                    $em->flush();
                                }

                            }
                        }

                        /**
                         * Saturday workout
                         */
                        $saturday_workout_rest = $request->request->get('saturday_workout_rest');
                        if (!$saturday_workout_rest) {
                            $saturday_workout_sort = $request->request->get('saturday_workout_sort');
                            $saturday_workout = $request->request->get('saturday_workout');
                            $saturday_workout_exercises = $request->request->get('saturday_workout_exercises');
                            if ($saturday_workout_sort != "" && $saturday_workout != "" && $saturday_workout_exercises != "") {
                                $saturday_workout_time = $request->request->get('saturday_workout_time');
                                $saturday_workout_time = new \DateTime($saturday_workout_time);
                                $saturday_workout_notes = $request->request->get('saturday_workout_notes');
                                $saturday_workout_exercises = implode(',', array_keys($saturday_workout_exercises));

                                if ($saturday_workout_time == "" || $saturday_workout_notes == "") {
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings', "Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                if($saturdayWorkout == false){
                                    $saturdayWorkout = new Workout();
                                    $saturdayWorkout->setIdPlan($plan->getIdPlan());
                                    $saturdayWorkout->setWorkoutSort($saturday_workout_sort);
                                    $saturdayWorkout->setDay('Sabado');
                                    $saturdayWorkout->setDateAdd(new \DateTime('NOW'));
                                    $saturdayWorkout->setHour($saturday_workout_time);
                                    $saturdayWorkout->setWorkout($saturday_workout);
                                    $saturdayWorkout->setWorkoutExercises($saturday_workout_exercises);
                                    $saturdayWorkout->setWorkoutNotes($saturday_workout_notes);
                                    $em->persist($saturdayWorkout);
                                    $em->flush();
                                }
                                else{
                                    $saturdayWorkout->setHour($saturday_workout_time);
                                    $saturdayWorkout->setWorkout($saturday_workout);
                                    $saturdayWorkout->setWorkoutExercises($saturday_workout_exercises);
                                    $saturdayWorkout->setWorkoutNotes($saturday_workout_notes);
                                    $em->persist($saturdayWorkout);
                                    $em->flush();
                                }
                            }
                        }

                        /**
                         * Sunday workout
                         */
                        $sunday_workout_rest = $request->request->get('sunday_workout_rest');
                        if (!$sunday_workout_rest) {
                            $sunday_workout_sort = $request->request->get('sunday_workout_sort');
                            $sunday_workout = $request->request->get('sunday_workout');
                            $sunday_workout_exercises = $request->request->get('sunday_workout_exercises');
                            if ($sunday_workout_sort != "" && $sunday_workout != "" && $sunday_workout_exercises != "") {
                                $sunday_workout_time = $request->request->get('sunday_workout_time');
                                $sunday_workout_time = new \DateTime($sunday_workout_time);
                                $sunday_workout_notes = $request->request->get('sunday_workout_notes');
                                $sunday_workout_exercises = implode(',', array_keys($sunday_workout_exercises));

                                if ($sunday_workout_time == "" || $sunday_workout_notes == "") {
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings', "Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                if($sundayWorkout == false){
                                    $sundayWorkout = new Workout();
                                    $sundayWorkout->setIdPlan($plan->getIdPlan());
                                    $sundayWorkout->setWorkoutSort($sunday_workout_sort);
                                    $sundayWorkout->setDay('Domingo');
                                    $sundayWorkout->setDateAdd(new \DateTime('NOW'));
                                    $sundayWorkout->setHour($sunday_workout_time);
                                    $sundayWorkout->setWorkout($sunday_workout);
                                    $sundayWorkout->setWorkoutExercises($sunday_workout_exercises);
                                    $sundayWorkout->setWorkoutNotes($sunday_workout_notes);
                                    $em->persist($sundayWorkout);
                                    $em->flush();
                                }
                                else{
                                    $sundayWorkout->setHour($sunday_workout_time);
                                    $sundayWorkout->setWorkout($sunday_workout);
                                    $sundayWorkout->setWorkoutExercises($sunday_workout_exercises);
                                    $sundayWorkout->setWorkoutNotes($sunday_workout_notes);
                                    $em->persist($sundayWorkout);
                                    $em->flush();
                                }
                            }
                        }
                        $this->addLog('edit_weekly_plan', $plan->getIdUser(), "Planificación semanal modificada: ". $plan->getTitle());
                    }
                }
            }
        }

        return $this->render('@Nutritionist/nutritionist-edit-weekly-plan.html.twig',
            [
                "id_plan" => $id_plan,
                "weeklyPlan" => $plan,
                "exercises" => $exercises,
                "tags" => $tags,

                //Meals
                "monday_breakfast" => reset($monday_breakfast),
                "tuesday_breakfast" => reset($tuesday_breakfast),
                "wednesday_breakfast" => reset($wednesday_breakfast),
                "thursday_breakfast" => reset($thursday_breakfast),
                "friday_breakfast" => reset($friday_breakfast),
                "saturday_breakfast" => reset($saturday_breakfast),
                "sunday_breakfast" => reset($sunday_breakfast),
                "monday_snack" => reset($monday_snack),
                "tuesday_snack" => reset($tuesday_snack),
                "wednesday_snack" => reset($wednesday_snack),
                "thursday_snack" => reset($thursday_snack),
                "friday_snack" => reset($friday_snack),
                "saturday_snack" => reset($saturday_snack),
                "sunday_snack" => reset($sunday_snack),
                "monday_lunch" => reset($monday_lunch),
                "tuesday_lunch" => reset($tuesday_lunch),
                "wednesday_lunch" => reset($wednesday_lunch),
                "thursday_lunch" => reset($thursday_lunch),
                "friday_lunch" => reset($friday_lunch),
                "saturday_lunch" => reset($saturday_lunch),
                "sunday_lunch" => reset($sunday_lunch),
                "monday_afternoon" => reset($monday_afternoon),
                "tuesday_afternoon" => reset($tuesday_afternoon),
                "wednesday_afternoon" => reset($wednesday_afternoon),
                "thursday_afternoon" => reset($thursday_afternoon),
                "friday_afternoon" => reset($friday_afternoon),
                "saturday_afternoon" => reset($saturday_afternoon),
                "sunday_afternoon" => reset($sunday_afternoon),
                "monday_dinner" => reset($monday_dinner),
                "tuesday_dinner" => reset($tuesday_dinner),
                "wednesday_dinner" => reset($wednesday_dinner),
                "thursday_dinner" => reset($thursday_dinner),
                "friday_dinner" => reset($friday_dinner),
                "saturday_dinner" => reset($saturday_dinner),
                "sunday_dinner" => reset($sunday_dinner),

                //Workouts
                "monday_workout" => $mondayWorkout,
                "monday_workout_exercises" => $mondayWorkout != false ? $mondayWorkout->getWorkoutExercises() : [],
                "tuesday_workout" => $tuesdayWorkout,
                "tuesday_workout_exercises" => $tuesdayWorkout != false ? $tuesdayWorkout->getWorkoutExercises() : [],
                "wednesday_workout" => $wednesdayWorkout,
                "wednesday_workout_exercises" => $wednesdayWorkout != false ? $wednesdayWorkout->getWorkoutExercises() : [],
                "thursday_workout" => $thursdayWorkout,
                "thursday_workout_exercises" => $thursdayWorkout != false ? $thursdayWorkout->getWorkoutExercises() : [],
                "friday_workout" => $fridayWorkout,
                "friday_workout_exercises" => $fridayWorkout != false ? $fridayWorkout->getWorkoutExercises() : [],
                "saturday_workout" => $saturdayWorkout,
                "saturday_workout_exercises" => $saturdayWorkout != false ? $saturdayWorkout->getWorkoutExercises() : [],
                "sunday_workout" => $sundayWorkout,
                "sunday_workout_exercises" => $sundayWorkout != false ? $sundayWorkout->getWorkoutExercises() : [],
            ]
        );
    }

    /**
     * Fn que se encarga de la creacion de planificaciones semanales
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistAddPlansAction(Request $request)
    {
        $exercises = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);

            /**
             * Cargamos los ejercicios
             */
            $em = $this->getDoctrine()->getManager();
            $exercises_repo = $em->getRepository("NutritionistBundle:Exercise");
            $exercises = $exercises_repo->findAll();

            /**
             * Cargamos los tags
             */
            $tags_repo = $em->getRepository("CustomsBundle:Tag");
            $tags = $tags_repo->findAll();

            if($request->isMethod('POST')){
                $plan_days = 0;

                /**
                 * Monday meal
                 */
                $monday_meals = false;
                $monday_breakfast_hour = $request->request->get('breakfast_hour_monday');
                $monday_breakfast_menu = $request->request->get('breakfast_menu_monday');
                $monday_breakfast_list = $request->request->get('breakfast_list_monday');
                $monday_breakfast_comments = $request->request->get('breakfast_comments_monday');
                $monday_snack_hour = $request->request->get('snack_hour_monday');
                $monday_snack_menu = $request->request->get('snack_menu_monday');
                $monday_snack_list = $request->request->get('snack_list_monday');
                $monday_snack_comments = $request->request->get('snack_comments_monday');
                $monday_lunch_hour = $request->request->get('lunch_hour_monday');
                $monday_lunch_menu = $request->request->get('lunch_menu_monday');
                $monday_lunch_list = $request->request->get('lunch_list_monday');
                $monday_lunch_comments = $request->request->get('lunch_comments_monday');
                $monday_afternoon_hour = $request->request->get('afternoon_hour_monday');
                $monday_afternoon_menu = $request->request->get('afternoon_menu_monday');
                $monday_afternoon_list = $request->request->get('afternoon_list_monday');
                $monday_afternoon_comments = $request->request->get('afternoon_comments_monday');
                $monday_dinner_hour = $request->request->get('dinner_hour_monday');
                $monday_dinner_menu = $request->request->get('dinner_menu_monday');
                $monday_dinner_list = $request->request->get('dinner_list_monday');
                $monday_dinner_comments = $request->request->get('dinner_comments_monday');


                if($monday_breakfast_hour != "" && $monday_breakfast_menu != "" && $monday_breakfast_list != "" &&
                    $monday_snack_hour != "" && $monday_snack_menu != "" && $monday_snack_list != "" &&
                    $monday_lunch_hour != "" && $monday_lunch_menu != "" && $monday_lunch_list != "" &&
                    $monday_afternoon_hour != "" && $monday_afternoon_menu != "" && $monday_afternoon_list != "" &&
                    $monday_dinner_hour != "" && $monday_dinner_menu != "" && $monday_dinner_list != ""){
                    $plan_days += 1;
                    $monday_meals = true;
                }

                /**
                 * Tuesday meal
                 */
                $tuesday_meals = false;
                $tuesday_breakfast_hour = $request->request->get('breakfast_hour_tuesday');
                $tuesday_breakfast_menu = $request->request->get('breakfast_menu_tuesday');
                $tuesday_breakfast_list = $request->request->get('breakfast_list_tuesday');
                $tuesday_breakfast_comments = $request->request->get('breakfast_comments_tuesday');
                $tuesday_snack_hour = $request->request->get('snack_hour_tuesday');
                $tuesday_snack_menu = $request->request->get('snack_menu_tuesday');
                $tuesday_snack_list = $request->request->get('snack_list_tuesday');
                $tuesday_snack_comments = $request->request->get('snack_comments_tuesday');
                $tuesday_lunch_hour = $request->request->get('lunch_hour_tuesday');
                $tuesday_lunch_menu = $request->request->get('lunch_menu_tuesday');
                $tuesday_lunch_list = $request->request->get('lunch_list_tuesday');
                $tuesday_lunch_comments = $request->request->get('lunch_comments_tuesday');
                $tuesday_afternoon_hour = $request->request->get('afternoon_hour_tuesday');
                $tuesday_afternoon_menu = $request->request->get('afternoon_menu_tuesday');
                $tuesday_afternoon_list = $request->request->get('afternoon_list_tuesday');
                $tuesday_afternoon_comments = $request->request->get('afternoon_comments_tuesday');
                $tuesday_dinner_hour = $request->request->get('dinner_hour_tuesday');
                $tuesday_dinner_menu = $request->request->get('dinner_menu_tuesday');
                $tuesday_dinner_list = $request->request->get('dinner_list_tuesday');
                $tuesday_dinner_comments = $request->request->get('dinner_comments_tuesday');


                if($tuesday_breakfast_hour != "" && $tuesday_breakfast_menu != "" && $tuesday_breakfast_list != "" &&
                    $tuesday_snack_hour != "" && $tuesday_snack_menu != "" && $tuesday_snack_list != "" &&
                    $tuesday_lunch_hour != "" && $tuesday_lunch_menu != "" && $tuesday_lunch_list != "" &&
                    $tuesday_afternoon_hour != "" && $tuesday_afternoon_menu != "" && $tuesday_afternoon_list != "" &&
                    $tuesday_dinner_hour != "" && $tuesday_dinner_menu != "" && $tuesday_dinner_list != ""){
                    $plan_days += 1;
                    $tuesday_meals = true;
                }

                /**
                 * Wednesday meal
                 */
                $wednesday_meals = false;
                $wednesday_breakfast_hour = $request->request->get('breakfast_hour_wednesday');
                $wednesday_breakfast_menu = $request->request->get('breakfast_menu_wednesday');
                $wednesday_breakfast_list = $request->request->get('breakfast_list_wednesday');
                $wednesday_breakfast_comments = $request->request->get('breakfast_comments_wednesday');
                $wednesday_snack_hour = $request->request->get('snack_hour_wednesday');
                $wednesday_snack_menu = $request->request->get('snack_menu_wednesday');
                $wednesday_snack_list = $request->request->get('snack_list_wednesday');
                $wednesday_snack_comments = $request->request->get('snack_comments_wednesday');
                $wednesday_lunch_hour = $request->request->get('lunch_hour_wednesday');
                $wednesday_lunch_menu = $request->request->get('lunch_menu_wednesday');
                $wednesday_lunch_list = $request->request->get('lunch_list_wednesday');
                $wednesday_lunch_comments = $request->request->get('lunch_comments_wednesday');
                $wednesday_afternoon_hour = $request->request->get('afternoon_hour_wednesday');
                $wednesday_afternoon_menu = $request->request->get('afternoon_menu_wednesday');
                $wednesday_afternoon_list = $request->request->get('afternoon_list_wednesday');
                $wednesday_afternoon_comments = $request->request->get('afternoon_comments_wednesday');
                $wednesday_dinner_hour = $request->request->get('dinner_hour_wednesday');
                $wednesday_dinner_menu = $request->request->get('dinner_menu_wednesday');
                $wednesday_dinner_list = $request->request->get('dinner_list_wednesday');
                $wednesday_dinner_comments = $request->request->get('dinner_comments_wednesday');


                if($wednesday_breakfast_hour != "" && $wednesday_breakfast_menu != "" && $wednesday_breakfast_list != "" &&
                    $wednesday_snack_hour != "" && $wednesday_snack_menu != "" && $wednesday_snack_list != "" &&
                    $wednesday_lunch_hour != "" && $wednesday_lunch_menu != "" && $wednesday_lunch_list != "" &&
                    $wednesday_afternoon_hour != "" && $wednesday_afternoon_menu != "" && $wednesday_afternoon_list != "" &&
                    $wednesday_dinner_hour != "" && $wednesday_dinner_menu != "" && $wednesday_dinner_list != ""){
                    $plan_days += 1;
                    $wednesday_meals = true;
                }

                /**
                 * Thursday meal
                 */
                $thursday_meals = false;
                $thursday_breakfast_hour = $request->request->get('breakfast_hour_thursday');
                $thursday_breakfast_menu = $request->request->get('breakfast_menu_thursday');
                $thursday_breakfast_list = $request->request->get('breakfast_list_thursday');
                $thursday_breakfast_comments = $request->request->get('breakfast_comments_thursday');
                $thursday_snack_hour = $request->request->get('snack_hour_thursday');
                $thursday_snack_menu = $request->request->get('snack_menu_thursday');
                $thursday_snack_list = $request->request->get('snack_list_thursday');
                $thursday_snack_comments = $request->request->get('snack_comments_thursday');
                $thursday_lunch_hour = $request->request->get('lunch_hour_thursday');
                $thursday_lunch_menu = $request->request->get('lunch_menu_thursday');
                $thursday_lunch_list = $request->request->get('lunch_list_thursday');
                $thursday_lunch_comments = $request->request->get('lunch_comments_thursday');
                $thursday_afternoon_hour = $request->request->get('afternoon_hour_thursday');
                $thursday_afternoon_menu = $request->request->get('afternoon_menu_thursday');
                $thursday_afternoon_list = $request->request->get('afternoon_list_thursday');
                $thursday_afternoon_comments = $request->request->get('afternoon_comments_thursday');
                $thursday_dinner_hour = $request->request->get('dinner_hour_thursday');
                $thursday_dinner_menu = $request->request->get('dinner_menu_thursday');
                $thursday_dinner_list = $request->request->get('dinner_list_thursday');
                $thursday_dinner_comments = $request->request->get('dinner_comments_thursday');


                if($thursday_breakfast_hour != "" && $thursday_breakfast_menu != "" && $thursday_breakfast_list != "" &&
                    $thursday_snack_hour != "" && $thursday_snack_menu != "" && $thursday_snack_list != "" &&
                    $thursday_lunch_hour != "" && $thursday_lunch_menu != "" && $thursday_lunch_list != "" &&
                    $thursday_afternoon_hour != "" && $thursday_afternoon_menu != "" && $thursday_afternoon_list != "" &&
                    $thursday_dinner_hour != "" && $thursday_dinner_menu != "" && $thursday_dinner_list != ""){
                    $plan_days += 1;
                    $thursday_meals = true;
                }

                /**
                 * Friday meal
                 */
                $friday_meals = false;
                $friday_breakfast_hour = $request->request->get('breakfast_hour_friday');
                $friday_breakfast_menu = $request->request->get('breakfast_menu_friday');
                $friday_breakfast_list = $request->request->get('breakfast_list_friday');
                $friday_breakfast_comments = $request->request->get('breakfast_comments_friday');
                $friday_snack_hour = $request->request->get('snack_hour_friday');
                $friday_snack_menu = $request->request->get('snack_menu_friday');
                $friday_snack_list = $request->request->get('snack_list_friday');
                $friday_snack_comments = $request->request->get('snack_comments_friday');
                $friday_lunch_hour = $request->request->get('lunch_hour_friday');
                $friday_lunch_menu = $request->request->get('lunch_menu_friday');
                $friday_lunch_list = $request->request->get('lunch_list_friday');
                $friday_lunch_comments = $request->request->get('lunch_comments_friday');
                $friday_afternoon_hour = $request->request->get('afternoon_hour_friday');
                $friday_afternoon_menu = $request->request->get('afternoon_menu_friday');
                $friday_afternoon_list = $request->request->get('afternoon_list_friday');
                $friday_afternoon_comments = $request->request->get('afternoon_comments_friday');
                $friday_dinner_hour = $request->request->get('dinner_hour_friday');
                $friday_dinner_menu = $request->request->get('dinner_menu_friday');
                $friday_dinner_list = $request->request->get('dinner_list_friday');
                $friday_dinner_comments = $request->request->get('dinner_comments_friday');


                if($friday_breakfast_hour != "" && $friday_breakfast_menu != "" && $friday_breakfast_list != "" &&
                    $friday_snack_hour != "" && $friday_snack_menu != "" && $friday_snack_list != "" &&
                    $friday_lunch_hour != "" && $friday_lunch_menu != "" && $friday_lunch_list != "" &&
                    $friday_afternoon_hour != "" && $friday_afternoon_menu != "" && $friday_afternoon_list != "" &&
                    $friday_dinner_hour != "" && $friday_dinner_menu != "" && $friday_dinner_list != ""){
                    $plan_days += 1;
                    $friday_meals = true;
                }

                /**
                 * Saturday meal
                 */
                $saturday_meals = false;
                $saturday_breakfast_hour = $request->request->get('breakfast_hour_saturday');
                $saturday_breakfast_menu = $request->request->get('breakfast_menu_saturday');
                $saturday_breakfast_list = $request->request->get('breakfast_list_saturday');
                $saturday_breakfast_comments = $request->request->get('breakfast_comments_saturday');
                $saturday_snack_hour = $request->request->get('snack_hour_saturday');
                $saturday_snack_menu = $request->request->get('snack_menu_saturday');
                $saturday_snack_list = $request->request->get('snack_list_saturday');
                $saturday_snack_comments = $request->request->get('snack_comments_saturday');
                $saturday_lunch_hour = $request->request->get('lunch_hour_saturday');
                $saturday_lunch_menu = $request->request->get('lunch_menu_saturday');
                $saturday_lunch_list = $request->request->get('lunch_list_saturday');
                $saturday_lunch_comments = $request->request->get('lunch_comments_saturday');
                $saturday_afternoon_hour = $request->request->get('afternoon_hour_saturday');
                $saturday_afternoon_menu = $request->request->get('afternoon_menu_saturday');
                $saturday_afternoon_list = $request->request->get('afternoon_list_saturday');
                $saturday_afternoon_comments = $request->request->get('afternoon_comments_saturday');
                $saturday_dinner_hour = $request->request->get('dinner_hour_saturday');
                $saturday_dinner_menu = $request->request->get('dinner_menu_saturday');
                $saturday_dinner_list = $request->request->get('dinner_list_saturday');
                $saturday_dinner_comments = $request->request->get('dinner_comments_saturday');


                if($saturday_breakfast_hour != "" && $saturday_breakfast_menu != "" && $saturday_breakfast_list != "" &&
                    $saturday_snack_hour != "" && $saturday_snack_menu != "" && $saturday_snack_list != "" &&
                    $saturday_lunch_hour != "" && $saturday_lunch_menu != "" && $saturday_lunch_list != "" &&
                    $saturday_afternoon_hour != "" && $saturday_afternoon_menu != "" && $saturday_afternoon_list != "" &&
                    $saturday_dinner_hour != "" && $saturday_dinner_menu != "" && $saturday_dinner_list != ""){
                    $plan_days += 1;
                    $saturday_meals = true;
                }

                /**
                 * Sunday meal
                 */
                $sunday_meals = false;
                $sunday_breakfast_hour = $request->request->get('breakfast_hour_sunday');
                $sunday_breakfast_menu = $request->request->get('breakfast_menu_sunday');
                $sunday_breakfast_list = $request->request->get('breakfast_list_sunday');
                $sunday_breakfast_comments = $request->request->get('breakfast_comments_sunday');
                $sunday_snack_hour = $request->request->get('snack_hour_sunday');
                $sunday_snack_menu = $request->request->get('snack_menu_sunday');
                $sunday_snack_list = $request->request->get('snack_list_sunday');
                $sunday_snack_comments = $request->request->get('snack_comments_sunday');
                $sunday_lunch_hour = $request->request->get('lunch_hour_sunday');
                $sunday_lunch_menu = $request->request->get('lunch_menu_sunday');
                $sunday_lunch_list = $request->request->get('lunch_list_sunday');
                $sunday_lunch_comments = $request->request->get('lunch_comments_sunday');
                $sunday_afternoon_hour = $request->request->get('afternoon_hour_sunday');
                $sunday_afternoon_menu = $request->request->get('afternoon_menu_sunday');
                $sunday_afternoon_list = $request->request->get('afternoon_list_sunday');
                $sunday_afternoon_comments = $request->request->get('afternoon_comments_sunday');
                $sunday_dinner_hour = $request->request->get('dinner_hour_sunday');
                $sunday_dinner_menu = $request->request->get('dinner_menu_sunday');
                $sunday_dinner_list = $request->request->get('dinner_list_sunday');
                $sunday_dinner_comments = $request->request->get('dinner_comments_sunday');


                if($sunday_breakfast_hour != "" && $sunday_breakfast_menu != "" && $sunday_breakfast_list != "" &&
                    $sunday_snack_hour != "" && $sunday_snack_menu != "" && $sunday_snack_list != "" &&
                    $sunday_lunch_hour != "" && $sunday_lunch_menu != "" && $sunday_lunch_list != "" &&
                    $sunday_afternoon_hour != "" && $sunday_afternoon_menu != "" && $sunday_afternoon_list != "" &&
                    $sunday_dinner_hour != "" && $sunday_dinner_menu != "" && $sunday_dinner_list != ""){
                    $plan_days += 1;
                    $sunday_meals = true;
                }

                /**
                 * Se tienen que indicar al menos todos los días del plan de alimentación
                 */
                if($plan_days == 7){
                    /**
                     * Creamos el plan
                     */
                    $plan = new WeeklyPlan();
                    $plan->setIdUser($user->getIdUser());

                    $tag = $request->request->get('plan_tags');
                    if($tag != ""){
                        $plan->setIdTag($tag);
                    }

                    $plan->setTitle($request->request->get('plan_title'));
                    $plan->setDescription($request->request->get('plan_description'));
                    $plan->setDateAdd(new \DateTime('NOW'));

                    $em->persist($plan);
                    $flush = $em->flush();
                    if(!empty($flush)){
                        $this->session->getFlashBag()->add('addWeeklyPlanKOStatus',"Se ha producido un error. No se ha podido guardar el plan semanal, intentelo de nuevo o contacte con el servicio de NutriK");
                    }
                    else{
                        /**
                         * Plan meals
                         */
                        if ($monday_meals){
                            $mondayBreakfast = new Meal();
                            $mondayBreakfast->setIdPlan($plan->getIdPlan());
                            $mondayBreakfast->setMealSort('Desayuno');
                            $mondayBreakfast->setDay('Lunes');
                            $mondayBreakfast->setHour($monday_breakfast_hour);
                            $mondayBreakfast->setMeal($monday_breakfast_menu);
                            $mondayBreakfast->setMealShoppingList($monday_breakfast_list);
                            $mondayBreakfast->setMealNotes($monday_breakfast_comments);
                            $mondayBreakfast->setDateAdd(new \DateTime('NOW'));
                            $em->persist($mondayBreakfast);
                            $em->flush();

                            $mondaySnack = new Meal();
                            $mondaySnack->setIdPlan($plan->getIdPlan());
                            $mondaySnack->setMealSort('Snack');
                            $mondaySnack->setDay('Lunes');
                            $mondaySnack->setHour($monday_snack_hour);
                            $mondaySnack->setMeal($monday_snack_menu);
                            $mondaySnack->setMealShoppingList($monday_snack_list);
                            $mondaySnack->setMealNotes($monday_snack_comments);
                            $mondaySnack->setDateAdd(new \DateTime('NOW'));
                            $em->persist($mondaySnack);
                            $em->flush();

                            $mondayLunch = new Meal();
                            $mondayLunch->setIdPlan($plan->getIdPlan());
                            $mondayLunch->setMealSort('Almuerzo');
                            $mondayLunch->setDay('Lunes');
                            $mondayLunch->setHour($monday_lunch_hour);
                            $mondayLunch->setMeal($monday_lunch_menu);
                            $mondayLunch->setMealShoppingList($monday_lunch_list);
                            $mondayLunch->setMealNotes($monday_lunch_comments);
                            $mondayLunch->setDateAdd(new \DateTime('NOW'));
                            $em->persist($mondayLunch);
                            $em->flush();

                            $mondayAfternoon = new Meal();
                            $mondayAfternoon->setIdPlan($plan->getIdPlan());
                            $mondayAfternoon->setMealSort('Merienda');
                            $mondayAfternoon->setDay('Lunes');
                            $mondayAfternoon->setHour($monday_afternoon_hour);
                            $mondayAfternoon->setMeal($monday_afternoon_menu);
                            $mondayAfternoon->setMealShoppingList($monday_afternoon_list);
                            $mondayAfternoon->setMealNotes($monday_afternoon_comments);
                            $mondayAfternoon->setDateAdd(new \DateTime('NOW'));
                            $em->persist($mondayAfternoon);
                            $em->flush();


                            $mondayDinner = new Meal();
                            $mondayDinner->setIdPlan($plan->getIdPlan());
                            $mondayDinner->setMealSort('Cena');
                            $mondayDinner->setDay('Lunes');
                            $mondayDinner->setHour($monday_dinner_hour);
                            $mondayDinner->setMeal($monday_dinner_menu);
                            $mondayDinner->setMealShoppingList($monday_dinner_list);
                            $mondayDinner->setMealNotes($monday_dinner_comments);
                            $mondayDinner->setDateAdd(new \DateTime('NOW'));
                            $em->persist($mondayDinner);
                            $em->flush();
                        }
                        if ($tuesday_meals){
                            $tuesdayBreakfast = new Meal();
                            $tuesdayBreakfast->setIdPlan($plan->getIdPlan());
                            $tuesdayBreakfast->setMealSort('Desayuno');
                            $tuesdayBreakfast->setDay('Martes');
                            $tuesdayBreakfast->setHour($tuesday_breakfast_hour);
                            $tuesdayBreakfast->setMeal($tuesday_breakfast_menu);
                            $tuesdayBreakfast->setMealShoppingList($tuesday_breakfast_list);
                            $tuesdayBreakfast->setMealNotes($tuesday_breakfast_comments);
                            $tuesdayBreakfast->setDateAdd(new \DateTime('NOW'));
                            $em->persist($tuesdayBreakfast);
                            $em->flush();

                            $tuesdaySnack = new Meal();
                            $tuesdaySnack->setIdPlan($plan->getIdPlan());
                            $tuesdaySnack->setMealSort('Snack');
                            $tuesdaySnack->setDay('Martes');
                            $tuesdaySnack->setHour($tuesday_snack_hour);
                            $tuesdaySnack->setMeal($tuesday_snack_menu);
                            $tuesdaySnack->setMealShoppingList($tuesday_snack_list);
                            $tuesdaySnack->setMealNotes($tuesday_snack_comments);
                            $tuesdaySnack->setDateAdd(new \DateTime('NOW'));
                            $em->persist($tuesdaySnack);
                            $em->flush();

                            $tuesdayLunch = new Meal();
                            $tuesdayLunch->setIdPlan($plan->getIdPlan());
                            $tuesdayLunch->setMealSort('Almuerzo');
                            $tuesdayLunch->setDay('Martes');
                            $tuesdayLunch->setHour($tuesday_lunch_hour);
                            $tuesdayLunch->setMeal($tuesday_lunch_menu);
                            $tuesdayLunch->setMealShoppingList($tuesday_lunch_list);
                            $tuesdayLunch->setMealNotes($tuesday_lunch_comments);
                            $tuesdayLunch->setDateAdd(new \DateTime('NOW'));
                            $em->persist($tuesdayLunch);
                            $em->flush();

                            $tuesdayAfternoon = new Meal();
                            $tuesdayAfternoon->setIdPlan($plan->getIdPlan());
                            $tuesdayAfternoon->setMealSort('Merienda');
                            $tuesdayAfternoon->setDay('Martes');
                            $tuesdayAfternoon->setHour($tuesday_afternoon_hour);
                            $tuesdayAfternoon->setMeal($tuesday_afternoon_menu);
                            $tuesdayAfternoon->setMealShoppingList($tuesday_afternoon_list);
                            $tuesdayAfternoon->setMealNotes($tuesday_afternoon_comments);
                            $tuesdayAfternoon->setDateAdd(new \DateTime('NOW'));
                            $em->persist($tuesdayAfternoon);
                            $em->flush();


                            $tuesdayDinner = new Meal();
                            $tuesdayDinner->setIdPlan($plan->getIdPlan());
                            $tuesdayDinner->setMealSort('Cena');
                            $tuesdayDinner->setDay('Martes');
                            $tuesdayDinner->setHour($tuesday_dinner_hour);
                            $tuesdayDinner->setMeal($tuesday_dinner_menu);
                            $tuesdayDinner->setMealShoppingList($tuesday_dinner_list);
                            $tuesdayDinner->setMealNotes($tuesday_dinner_comments);
                            $tuesdayDinner->setDateAdd(new \DateTime('NOW'));
                            $em->persist($tuesdayDinner);
                            $em->flush();
                        }
                        if ($wednesday_meals){
                            $wednesdayBreakfast = new Meal();
                            $wednesdayBreakfast->setIdPlan($plan->getIdPlan());
                            $wednesdayBreakfast->setMealSort('Desayuno');
                            $wednesdayBreakfast->setDay('Miercoles');
                            $wednesdayBreakfast->setHour($wednesday_breakfast_hour);
                            $wednesdayBreakfast->setMeal($wednesday_breakfast_menu);
                            $wednesdayBreakfast->setMealShoppingList($wednesday_breakfast_list);
                            $wednesdayBreakfast->setMealNotes($wednesday_breakfast_comments);
                            $wednesdayBreakfast->setDateAdd(new \DateTime('NOW'));
                            $em->persist($wednesdayBreakfast);
                            $em->flush();

                            $wednesdaySnack = new Meal();
                            $wednesdaySnack->setIdPlan($plan->getIdPlan());
                            $wednesdaySnack->setMealSort('Snack');
                            $wednesdaySnack->setDay('Miercoles');
                            $wednesdaySnack->setHour($wednesday_snack_hour);
                            $wednesdaySnack->setMeal($wednesday_snack_menu);
                            $wednesdaySnack->setMealShoppingList($wednesday_snack_list);
                            $wednesdaySnack->setMealNotes($wednesday_snack_comments);
                            $wednesdaySnack->setDateAdd(new \DateTime('NOW'));
                            $em->persist($wednesdaySnack);
                            $em->flush();

                            $wednesdayLunch = new Meal();
                            $wednesdayLunch->setIdPlan($plan->getIdPlan());
                            $wednesdayLunch->setMealSort('Almuerzo');
                            $wednesdayLunch->setDay('Miercoles');
                            $wednesdayLunch->setHour($wednesday_lunch_hour);
                            $wednesdayLunch->setMeal($wednesday_lunch_menu);
                            $wednesdayLunch->setMealShoppingList($wednesday_lunch_list);
                            $wednesdayLunch->setMealNotes($wednesday_lunch_comments);
                            $wednesdayLunch->setDateAdd(new \DateTime('NOW'));
                            $em->persist($wednesdayLunch);
                            $em->flush();

                            $wednesdayAfternoon = new Meal();
                            $wednesdayAfternoon->setIdPlan($plan->getIdPlan());
                            $wednesdayAfternoon->setMealSort('Merienda');
                            $wednesdayAfternoon->setDay('Miercoles');
                            $wednesdayAfternoon->setHour($wednesday_afternoon_hour);
                            $wednesdayAfternoon->setMeal($wednesday_afternoon_menu);
                            $wednesdayAfternoon->setMealShoppingList($wednesday_afternoon_list);
                            $wednesdayAfternoon->setMealNotes($wednesday_afternoon_comments);
                            $wednesdayAfternoon->setDateAdd(new \DateTime('NOW'));
                            $em->persist($wednesdayAfternoon);
                            $em->flush();


                            $wednesdayDinner = new Meal();
                            $wednesdayDinner->setIdPlan($plan->getIdPlan());
                            $wednesdayDinner->setMealSort('Cena');
                            $wednesdayDinner->setDay('Miercoles');
                            $wednesdayDinner->setHour($wednesday_dinner_hour);
                            $wednesdayDinner->setMeal($wednesday_dinner_menu);
                            $wednesdayDinner->setMealShoppingList($wednesday_dinner_list);
                            $wednesdayDinner->setMealNotes($wednesday_dinner_comments);
                            $wednesdayDinner->setDateAdd(new \DateTime('NOW'));
                            $em->persist($wednesdayDinner);
                            $em->flush();
                        }
                        if ($thursday_meals){
                            $thursdayBreakfast = new Meal();
                            $thursdayBreakfast->setIdPlan($plan->getIdPlan());
                            $thursdayBreakfast->setMealSort('Desayuno');
                            $thursdayBreakfast->setDay('Jueves');
                            $thursdayBreakfast->setHour($thursday_breakfast_hour);
                            $thursdayBreakfast->setMeal($thursday_breakfast_menu);
                            $thursdayBreakfast->setMealShoppingList($thursday_breakfast_list);
                            $thursdayBreakfast->setMealNotes($thursday_breakfast_comments);
                            $thursdayBreakfast->setDateAdd(new \DateTime('NOW'));
                            $em->persist($thursdayBreakfast);
                            $em->flush();

                            $thursdaySnack = new Meal();
                            $thursdaySnack->setIdPlan($plan->getIdPlan());
                            $thursdaySnack->setMealSort('Snack');
                            $thursdaySnack->setDay('Jueves');
                            $thursdaySnack->setHour($thursday_snack_hour);
                            $thursdaySnack->setMeal($thursday_snack_menu);
                            $thursdaySnack->setMealShoppingList($thursday_snack_list);
                            $thursdaySnack->setMealNotes($thursday_snack_comments);
                            $thursdaySnack->setDateAdd(new \DateTime('NOW'));
                            $em->persist($thursdaySnack);
                            $em->flush();

                            $thursdayLunch = new Meal();
                            $thursdayLunch->setIdPlan($plan->getIdPlan());
                            $thursdayLunch->setMealSort('Almuerzo');
                            $thursdayLunch->setDay('Jueves');
                            $thursdayLunch->setHour($thursday_lunch_hour);
                            $thursdayLunch->setMeal($thursday_lunch_menu);
                            $thursdayLunch->setMealShoppingList($thursday_lunch_list);
                            $thursdayLunch->setMealNotes($thursday_lunch_comments);
                            $thursdayLunch->setDateAdd(new \DateTime('NOW'));
                            $em->persist($thursdayLunch);
                            $em->flush();

                            $thursdayAfternoon = new Meal();
                            $thursdayAfternoon->setIdPlan($plan->getIdPlan());
                            $thursdayAfternoon->setMealSort('Merienda');
                            $thursdayAfternoon->setDay('Jueves');
                            $thursdayAfternoon->setHour($thursday_afternoon_hour);
                            $thursdayAfternoon->setMeal($thursday_afternoon_menu);
                            $thursdayAfternoon->setMealShoppingList($thursday_afternoon_list);
                            $thursdayAfternoon->setMealNotes($thursday_afternoon_comments);
                            $thursdayAfternoon->setDateAdd(new \DateTime('NOW'));
                            $em->persist($thursdayAfternoon);
                            $em->flush();


                            $thursdayDinner = new Meal();
                            $thursdayDinner->setIdPlan($plan->getIdPlan());
                            $thursdayDinner->setMealSort('Cena');
                            $thursdayDinner->setDay('Jueves');
                            $thursdayDinner->setHour($thursday_dinner_hour);
                            $thursdayDinner->setMeal($thursday_dinner_menu);
                            $thursdayDinner->setMealShoppingList($thursday_dinner_list);
                            $thursdayDinner->setMealNotes($thursday_dinner_comments);
                            $thursdayDinner->setDateAdd(new \DateTime('NOW'));
                            $em->persist($thursdayDinner);
                            $em->flush();
                        }
                        if ($friday_meals){
                            $fridayBreakfast = new Meal();
                            $fridayBreakfast->setIdPlan($plan->getIdPlan());
                            $fridayBreakfast->setMealSort('Desayuno');
                            $fridayBreakfast->setDay('Viernes');
                            $fridayBreakfast->setHour($friday_breakfast_hour);
                            $fridayBreakfast->setMeal($friday_breakfast_menu);
                            $fridayBreakfast->setMealShoppingList($friday_breakfast_list);
                            $fridayBreakfast->setMealNotes($friday_breakfast_comments);
                            $fridayBreakfast->setDateAdd(new \DateTime('NOW'));
                            $em->persist($fridayBreakfast);
                            $em->flush();

                            $fridaySnack = new Meal();
                            $fridaySnack->setIdPlan($plan->getIdPlan());
                            $fridaySnack->setMealSort('Snack');
                            $fridaySnack->setDay('Viernes');
                            $fridaySnack->setHour($friday_snack_hour);
                            $fridaySnack->setMeal($friday_snack_menu);
                            $fridaySnack->setMealShoppingList($friday_snack_list);
                            $fridaySnack->setMealNotes($friday_snack_comments);
                            $fridaySnack->setDateAdd(new \DateTime('NOW'));
                            $em->persist($fridaySnack);
                            $em->flush();

                            $fridayLunch = new Meal();
                            $fridayLunch->setIdPlan($plan->getIdPlan());
                            $fridayLunch->setMealSort('Almuerzo');
                            $fridayLunch->setDay('Viernes');
                            $fridayLunch->setHour($friday_lunch_hour);
                            $fridayLunch->setMeal($friday_lunch_menu);
                            $fridayLunch->setMealShoppingList($friday_lunch_list);
                            $fridayLunch->setMealNotes($friday_lunch_comments);
                            $fridayLunch->setDateAdd(new \DateTime('NOW'));
                            $em->persist($fridayLunch);
                            $em->flush();

                            $fridayAfternoon = new Meal();
                            $fridayAfternoon->setIdPlan($plan->getIdPlan());
                            $fridayAfternoon->setMealSort('Merienda');
                            $fridayAfternoon->setDay('Viernes');
                            $fridayAfternoon->setHour($friday_afternoon_hour);
                            $fridayAfternoon->setMeal($friday_afternoon_menu);
                            $fridayAfternoon->setMealShoppingList($friday_afternoon_list);
                            $fridayAfternoon->setMealNotes($friday_afternoon_comments);
                            $fridayAfternoon->setDateAdd(new \DateTime('NOW'));
                            $em->persist($fridayAfternoon);
                            $em->flush();


                            $fridayDinner = new Meal();
                            $fridayDinner->setIdPlan($plan->getIdPlan());
                            $fridayDinner->setMealSort('Cena');
                            $fridayDinner->setDay('Viernes');
                            $fridayDinner->setHour($friday_dinner_hour);
                            $fridayDinner->setMeal($friday_dinner_menu);
                            $fridayDinner->setMealShoppingList($friday_dinner_list);
                            $fridayDinner->setMealNotes($friday_dinner_comments);
                            $fridayDinner->setDateAdd(new \DateTime('NOW'));
                            $em->persist($fridayDinner);
                            $em->flush();
                        }
                        if ($saturday_meals){
                            $saturdayBreakfast = new Meal();
                            $saturdayBreakfast->setIdPlan($plan->getIdPlan());
                            $saturdayBreakfast->setMealSort('Desayuno');
                            $saturdayBreakfast->setDay('Sabado');
                            $saturdayBreakfast->setHour($saturday_breakfast_hour);
                            $saturdayBreakfast->setMeal($saturday_breakfast_menu);
                            $saturdayBreakfast->setMealShoppingList($saturday_breakfast_list);
                            $saturdayBreakfast->setMealNotes($saturday_breakfast_comments);
                            $saturdayBreakfast->setDateAdd(new \DateTime('NOW'));
                            $em->persist($saturdayBreakfast);
                            $em->flush();

                            $saturdaySnack = new Meal();
                            $saturdaySnack->setIdPlan($plan->getIdPlan());
                            $saturdaySnack->setMealSort('Snack');
                            $saturdaySnack->setDay('Sabado');
                            $saturdaySnack->setHour($saturday_snack_hour);
                            $saturdaySnack->setMeal($saturday_snack_menu);
                            $saturdaySnack->setMealShoppingList($saturday_snack_list);
                            $saturdaySnack->setMealNotes($saturday_snack_comments);
                            $saturdaySnack->setDateAdd(new \DateTime('NOW'));
                            $em->persist($saturdaySnack);
                            $em->flush();

                            $saturdayLunch = new Meal();
                            $saturdayLunch->setIdPlan($plan->getIdPlan());
                            $saturdayLunch->setMealSort('Almuerzo');
                            $saturdayLunch->setDay('Sabado');
                            $saturdayLunch->setHour($saturday_lunch_hour);
                            $saturdayLunch->setMeal($saturday_lunch_menu);
                            $saturdayLunch->setMealShoppingList($saturday_lunch_list);
                            $saturdayLunch->setMealNotes($saturday_lunch_comments);
                            $saturdayLunch->setDateAdd(new \DateTime('NOW'));
                            $em->persist($saturdayLunch);
                            $em->flush();

                            $saturdayAfternoon = new Meal();
                            $saturdayAfternoon->setIdPlan($plan->getIdPlan());
                            $saturdayAfternoon->setMealSort('Merienda');
                            $saturdayAfternoon->setDay('Sabado');
                            $saturdayAfternoon->setHour($saturday_afternoon_hour);
                            $saturdayAfternoon->setMeal($saturday_afternoon_menu);
                            $saturdayAfternoon->setMealShoppingList($saturday_afternoon_list);
                            $saturdayAfternoon->setMealNotes($saturday_afternoon_comments);
                            $saturdayAfternoon->setDateAdd(new \DateTime('NOW'));
                            $em->persist($saturdayAfternoon);
                            $em->flush();


                            $saturdayDinner = new Meal();
                            $saturdayDinner->setIdPlan($plan->getIdPlan());
                            $saturdayDinner->setMealSort('Cena');
                            $saturdayDinner->setDay('Sabado');
                            $saturdayDinner->setHour($saturday_dinner_hour);
                            $saturdayDinner->setMeal($saturday_dinner_menu);
                            $saturdayDinner->setMealShoppingList($saturday_dinner_list);
                            $saturdayDinner->setMealNotes($saturday_dinner_comments);
                            $saturdayDinner->setDateAdd(new \DateTime('NOW'));
                            $em->persist($saturdayDinner);
                            $em->flush();
                        }
                        if ($sunday_meals){
                            $sundayBreakfast = new Meal();
                            $sundayBreakfast->setIdPlan($plan->getIdPlan());
                            $sundayBreakfast->setMealSort('Desayuno');
                            $sundayBreakfast->setDay('Domingo');
                            $sundayBreakfast->setHour($sunday_breakfast_hour);
                            $sundayBreakfast->setMeal($sunday_breakfast_menu);
                            $sundayBreakfast->setMealShoppingList($sunday_breakfast_list);
                            $sundayBreakfast->setMealNotes($sunday_breakfast_comments);
                            $sundayBreakfast->setDateAdd(new \DateTime('NOW'));
                            $em->persist($sundayBreakfast);
                            $em->flush();

                            $sundaySnack = new Meal();
                            $sundaySnack->setIdPlan($plan->getIdPlan());
                            $sundaySnack->setMealSort('Snack');
                            $sundaySnack->setDay('Domingo');
                            $sundaySnack->setHour($sunday_snack_hour);
                            $sundaySnack->setMeal($sunday_snack_menu);
                            $sundaySnack->setMealShoppingList($sunday_snack_list);
                            $sundaySnack->setMealNotes($sunday_snack_comments);
                            $sundaySnack->setDateAdd(new \DateTime('NOW'));
                            $em->persist($sundaySnack);
                            $em->flush();

                            $sundayLunch = new Meal();
                            $sundayLunch->setIdPlan($plan->getIdPlan());
                            $sundayLunch->setMealSort('Almuerzo');
                            $sundayLunch->setDay('Domingo');
                            $sundayLunch->setHour($sunday_lunch_hour);
                            $sundayLunch->setMeal($sunday_lunch_menu);
                            $sundayLunch->setMealShoppingList($sunday_lunch_list);
                            $sundayLunch->setMealNotes($sunday_lunch_comments);
                            $sundayLunch->setDateAdd(new \DateTime('NOW'));
                            $em->persist($sundayLunch);
                            $em->flush();

                            $sundayAfternoon = new Meal();
                            $sundayAfternoon->setIdPlan($plan->getIdPlan());
                            $sundayAfternoon->setMealSort('Merienda');
                            $sundayAfternoon->setDay('Domingo');
                            $sundayAfternoon->setHour($sunday_afternoon_hour);
                            $sundayAfternoon->setMeal($sunday_afternoon_menu);
                            $sundayAfternoon->setMealShoppingList($sunday_afternoon_list);
                            $sundayAfternoon->setMealNotes($sunday_afternoon_comments);
                            $sundayAfternoon->setDateAdd(new \DateTime('NOW'));
                            $em->persist($sundayAfternoon);
                            $em->flush();


                            $sundayDinner = new Meal();
                            $sundayDinner->setIdPlan($plan->getIdPlan());
                            $sundayDinner->setMealSort('Cena');
                            $sundayDinner->setDay('Domingo');
                            $sundayDinner->setHour($sunday_dinner_hour);
                            $sundayDinner->setMeal($sunday_dinner_menu);
                            $sundayDinner->setMealShoppingList($sunday_dinner_list);
                            $sundayDinner->setMealNotes($sunday_dinner_comments);
                            $sundayDinner->setDateAdd(new \DateTime('NOW'));
                            $em->persist($sundayDinner);
                            $em->flush();
                        }


                        /**
                         * Monday workout
                         */
                        $monday_workout_rest = $request->request->get('monday_workout_rest');
                        if(!$monday_workout_rest){
                            $monday_workout_sort = $request->request->get('monday_workout_sort');
                            $monday_workout = $request->request->get('monday_workout');
                            $monday_workout_exercises = $request->request->get('monday_workout_exercises');
                            if($monday_workout_sort != "" && $monday_workout != "" && $monday_workout_exercises != ""){
                                $monday_workout_time = $request->request->get('monday_workout_time');
                                $monday_workout_time = new \DateTime($monday_workout_time);
                                $monday_workout_notes = $request->request->get('monday_workout_notes');
                                $monday_workout_exercises = implode(',', array_keys($monday_workout_exercises));

                                if($monday_workout_time == "" || $monday_workout_notes == ""){
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings',"Advertencia. Faltan datos relacionados con el entrenamiento del Lunes para este plan semanal");
                                }

                                $mondayWorkout = new Workout();
                                $mondayWorkout->setIdPlan($plan->getIdPlan());
                                $mondayWorkout->setWorkoutSort($monday_workout_sort);
                                $mondayWorkout->setDay('Lunes');
                                $mondayWorkout->setHour($monday_workout_time);
                                $mondayWorkout->setWorkout($monday_workout);
                                $mondayWorkout->setWorkoutExercises($monday_workout_exercises);
                                $mondayWorkout->setWorkoutNotes($monday_workout_notes);
                                $mondayWorkout->setDateAdd(new \DateTime('NOW'));
                                $em->persist($mondayWorkout);
                                $em->flush();
                            }
                        }

                        /**
                         * Tuesday workout
                         */
                        $tuesday_workout_rest = $request->request->get('tuesday_workout_rest');
                        if(!$tuesday_workout_rest){
                            $tuesday_workout_sort = $request->request->get('tuesday_workout_sort');
                            $tuesday_workout = $request->request->get('tuesday_workout');
                            $tuesday_workout_exercises = $request->request->get('tuesday_workout_exercises');
                            if($tuesday_workout_sort != "" && $tuesday_workout != "" && $tuesday_workout_exercises != ""){
                                $tuesday_workout_time = $request->request->get('tuesday_workout_time');
                                $tuesday_workout_time = new \DateTime($tuesday_workout_time);
                                $tuesday_workout_notes = $request->request->get('tuesday_workout_notes');
                                $tuesday_workout_exercises = implode(',', array_keys($tuesday_workout_exercises));

                                if($tuesday_workout_time == "" || $tuesday_workout_notes == ""){
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings',"Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                $tuesdayWorkout = new Workout();
                                $tuesdayWorkout->setIdPlan($plan->getIdPlan());
                                $tuesdayWorkout->setWorkoutSort($tuesday_workout_sort);
                                $tuesdayWorkout->setDay('Lunes');
                                $tuesdayWorkout->setHour($tuesday_workout_time);
                                $tuesdayWorkout->setWorkout($tuesday_workout);
                                $tuesdayWorkout->setWorkoutExercises($tuesday_workout_exercises);
                                $tuesdayWorkout->setWorkoutNotes($tuesday_workout_notes);
                                $tuesdayWorkout->setDateAdd(new \DateTime('NOW'));
                                $em->persist($tuesdayWorkout);
                                $em->flush();
                            }
                        }

                        /**
                         * Wednesday workout
                         */
                        $wednesday_workout_rest = $request->request->get('wednesday_workout_rest');
                        if(!$wednesday_workout_rest){
                            $wednesday_workout_sort = $request->request->get('wednesday_workout_sort');
                            $wednesday_workout = $request->request->get('wednesday_workout');
                            $wednesday_workout_exercises = $request->request->get('wednesday_workout_exercises');
                            if($wednesday_workout_sort != "" && $wednesday_workout != "" && $wednesday_workout_exercises != ""){
                                $wednesday_workout_time = $request->request->get('wednesday_workout_time');
                                $wednesday_workout_time = new \DateTime($wednesday_workout_time);
                                $wednesday_workout_notes = $request->request->get('wednesday_workout_notes');
                                $wednesday_workout_exercises = implode(',', array_keys($wednesday_workout_exercises));

                                if($wednesday_workout_time == "" || $wednesday_workout_notes == ""){
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings',"Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                $wednesdayWorkout = new Workout();
                                $wednesdayWorkout->setIdPlan($plan->getIdPlan());
                                $wednesdayWorkout->setWorkoutSort($wednesday_workout_sort);
                                $wednesdayWorkout->setDay('Lunes');
                                $wednesdayWorkout->setHour($wednesday_workout_time);
                                $wednesdayWorkout->setWorkout($wednesday_workout);
                                $wednesdayWorkout->setWorkoutExercises($wednesday_workout_exercises);
                                $wednesdayWorkout->setWorkoutNotes($wednesday_workout_notes);
                                $wednesdayWorkout->setDateAdd(new \DateTime('NOW'));
                                $em->persist($wednesdayWorkout);
                                $em->flush();
                            }
                        }

                        /**
                         * Thursday workout
                         */
                        $thursday_workout_rest = $request->request->get('thursday_workout_rest');
                        if(!$thursday_workout_rest){
                            $thursday_workout_sort = $request->request->get('thursday_workout_sort');
                            $thursday_workout = $request->request->get('thursday_workout');
                            $thursday_workout_exercises = $request->request->get('thursday_workout_exercises');
                            if($thursday_workout_sort != "" && $thursday_workout != "" && $thursday_workout_exercises != ""){
                                $thursday_workout_time = $request->request->get('thursday_workout_time');
                                $thursday_workout_time = new \DateTime($thursday_workout_time);
                                $thursday_workout_notes = $request->request->get('thursday_workout_notes');
                                $thursday_workout_exercises = implode(',', array_keys($thursday_workout_exercises));

                                if($thursday_workout_time == "" || $thursday_workout_notes == ""){
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings',"Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                $thursdayWorkout = new Workout();
                                $thursdayWorkout->setIdPlan($plan->getIdPlan());
                                $thursdayWorkout->setWorkoutSort($thursday_workout_sort);
                                $thursdayWorkout->setDay('Lunes');
                                $thursdayWorkout->setHour($thursday_workout_time);
                                $thursdayWorkout->setWorkout($thursday_workout);
                                $thursdayWorkout->setWorkoutExercises($thursday_workout_exercises);
                                $thursdayWorkout->setWorkoutNotes($thursday_workout_notes);
                                $thursdayWorkout->setDateAdd(new \DateTime('NOW'));
                                $em->persist($thursdayWorkout);
                                $em->flush();
                            }
                        }

                        /**
                         * Friday workout
                         */
                        $friday_workout_rest = $request->request->get('friday_workout_rest');
                        if(!$friday_workout_rest){
                            $friday_workout_sort = $request->request->get('friday_workout_sort');
                            $friday_workout = $request->request->get('friday_workout');
                            $friday_workout_exercises = $request->request->get('friday_workout_exercises');
                            if($friday_workout_sort != "" && $friday_workout != "" && $friday_workout_exercises != ""){
                                $friday_workout_time = $request->request->get('friday_workout_time');
                                $friday_workout_time = new \DateTime($friday_workout_time);
                                $friday_workout_notes = $request->request->get('friday_workout_notes');
                                $friday_workout_exercises = implode(',', array_keys($friday_workout_exercises));

                                if($friday_workout_time == "" || $friday_workout_notes == ""){
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings',"Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                $fridayWorkout = new Workout();
                                $fridayWorkout->setIdPlan($plan->getIdPlan());
                                $fridayWorkout->setWorkoutSort($friday_workout_sort);
                                $fridayWorkout->setDay('Lunes');
                                $fridayWorkout->setHour($friday_workout_time);
                                $fridayWorkout->setWorkout($friday_workout);
                                $fridayWorkout->setWorkoutExercises($friday_workout_exercises);
                                $fridayWorkout->setWorkoutNotes($friday_workout_notes);
                                $fridayWorkout->setDateAdd(new \DateTime('NOW'));
                                $em->persist($fridayWorkout);
                                $em->flush();
                            }
                        }

                        /**
                         * Saturday workout
                         */
                        $saturday_workout_rest = $request->request->get('saturday_workout_rest');
                        if(!$saturday_workout_rest){
                            $saturday_workout_sort = $request->request->get('saturday_workout_sort');
                            $saturday_workout = $request->request->get('saturday_workout');
                            $saturday_workout_exercises = $request->request->get('saturday_workout_exercises');
                            if($saturday_workout_sort != "" && $saturday_workout != "" && $saturday_workout_exercises != ""){
                                $saturday_workout_time = $request->request->get('saturday_workout_time');
                                $saturday_workout_time = new \DateTime($saturday_workout_time);
                                $saturday_workout_notes = $request->request->get('saturday_workout_notes');
                                $saturday_workout_exercises = implode(',', array_keys($saturday_workout_exercises));

                                if($saturday_workout_time == "" || $saturday_workout_notes == ""){
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings',"Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                $saturdayWorkout = new Workout();
                                $saturdayWorkout->setIdPlan($plan->getIdPlan());
                                $saturdayWorkout->setWorkoutSort($saturday_workout_sort);
                                $saturdayWorkout->setDay('Lunes');
                                $saturdayWorkout->setHour($saturday_workout_time);
                                $saturdayWorkout->setWorkout($saturday_workout);
                                $saturdayWorkout->setWorkoutExercises($saturday_workout_exercises);
                                $saturdayWorkout->setWorkoutNotes($saturday_workout_notes);
                                $saturdayWorkout->setDateAdd(new \DateTime('NOW'));
                                $em->persist($saturdayWorkout);
                                $em->flush();
                            }
                        }

                        /**
                         * Sunday workout
                         */
                        $sunday_workout_rest = $request->request->get('sunday_workout_rest');
                        if(!$sunday_workout_rest){
                            $sunday_workout_sort = $request->request->get('sunday_workout_sort');
                            $sunday_workout = $request->request->get('sunday_workout');
                            $sunday_workout_exercises = $request->request->get('sunday_workout_exercises');
                            if($sunday_workout_sort != "" && $sunday_workout != "" && $sunday_workout_exercises != ""){
                                $sunday_workout_time = $request->request->get('sunday_workout_time');
                                $sunday_workout_time = new \DateTime($sunday_workout_time);
                                $sunday_workout_notes = $request->request->get('sunday_workout_notes');
                                $sunday_workout_exercises = implode(',', array_keys($sunday_workout_exercises));

                                if($sunday_workout_time == "" || $sunday_workout_notes == ""){
                                    $this->session->getFlashBag()->add('editWeeklyPlanWarnings',"Advertencia. Faltan datos relacionados con el entrenamiento del Martes para este plan semanal");
                                }

                                $sundayWorkout = new Workout();
                                $sundayWorkout->setIdPlan($plan->getIdPlan());
                                $sundayWorkout->setWorkoutSort($sunday_workout_sort);
                                $sundayWorkout->setDay('Lunes');
                                $sundayWorkout->setHour($sunday_workout_time);
                                $sundayWorkout->setWorkout($sunday_workout);
                                $sundayWorkout->setWorkoutExercises($sunday_workout_exercises);
                                $sundayWorkout->setWorkoutNotes($sunday_workout_notes);
                                $sundayWorkout->setDateAdd(new \DateTime('NOW'));
                                $em->persist($sundayWorkout);
                                $em->flush();
                            }
                        }
                        $this->addLog('add_weekly_plan', $plan->getIdUser(), "Planificación semanal creada: ". $plan->getTitle());
                        $this->session->getFlashBag()->add('weeklyPlansOKStatus',"Planificación semanal creada correctamente");
                        return $this->redirectToRoute('nutritionist_plans');
                    }
                }
                else{
                    $this->session->getFlashBag()->add('addWeeklyPlanKOStatus',"Se ha producido un error. Debes indicar al menos el plan alimenticio de los 7 días, intentelo de nuevo.");
                }
            }
        }
        else{
            $this->session->getFlashBag()->add('addWeeklyPlanKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-weekly-plan.html.twig',
            [
                "exercises" => $exercises,
                "tags" => $tags
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar el listado de eventos de un nutricionista
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistEventsAction()
    {
        $events = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);
            $events_repo = $em->getRepository("NutritionistBundle:Event");
            $events = $events_repo->findBy(array("idUser" => $user->getIdUser()));
        }
        else{
            $this->session->getFlashBag()->add('eventsKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-events.html.twig',
            [
                "events" => $events
            ]
        );
    }

    /**
     * Fn que se encarga de la creacion de un evento
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function nutritionistAddEventAction(Request $request){
        $categories = array();

        $tags = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);

            /**
             * Cargamos las categorias
             */
            $categories_repo = $em->getRepository("CustomsBundle:Category");
            $categories = $categories_repo->findAll();

            /**
             * Cargamos los tags
             */
            $tags_repo = $em->getRepository("CustomsBundle:Tag");
            $tags = $tags_repo->findAll();

            if($request->isMethod('POST')){
                $date = $request->request->get('event_date');
                $hour = $request->request->get('event_hour');
                $event_date = new \DateTime($date . ' ' . $hour);
                if($event_date <= new \DateTime("NOW")){
                    $this->session->getFlashBag()->add('addEventKOStatus',"Se ha producido un error. La fecha y hora del evento no pueden ser inferiores a las actuales.");
                }
                else{
                    $event = New Event();
                    $event->setIdUser($user->getIdUser());
                    $event->setIdCategory($request->request->get('event_category'));
                    $event->setIdTag($request->request->get('event_tag'));
                    $event->setTitle($request->request->get('event_title'));
                    $event->setDescription($request->request->get('event_description'));
                    $event->setEventLink($request->request->get('event_link'));
                    $event->setDate($event_date);
                    $event->setFrecuency($request->request->get('event_frecuency'));
                    $event->setDuration($request->request->get('event_duration'));
                    $event->setDateAdd(new \DateTime("NOW"));
                    $event->setDateUpd(new \DateTime("NOW"));

                    $em->persist($event);
                    $flush = $em->flush();
                    if(!empty($flush)){
                        $this->session->getFlashBag()->add('addEventKOStatus',"Se ha producido un error. No hemos podido crear el evento, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('eventsOKStatus',"El evento se ha creado correctamente");
                        $this->addLog('add_event', $event->getIdUser(), "Evento creado: ". $event->getTitle());
                        return $this->redirectToRoute('nutritionist_events');
                    }
                }
            }
        }
        else{
            $this->session->getFlashBag()->add('addEventKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }


        return $this->render('@Nutritionist/nutritionist-add-event.html.twig',
            [
                "categories" => $categories,
                "tags" => $tags
            ]
        );
    }

    /**
     * Fn que se encarga de la eliminacion de un evento
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function nutritionistDeleteEventAction(Request $request){
        if($request->isMethod('POST')){
            $id_event = $request->request->get('_event_delete');

            $em = $this->getDoctrine()->getManager();
            $events_repo = $em->getRepository("NutritionistBundle:Event");
            $event = $events_repo->find($id_event);
            $em->remove($event);
            $flush = $em->flush();
            if(!empty($flush)){
                $this->session->getFlashBag()->add('eventsKOStatus',"Se ha producido un error. No hemos podido borrar el evento, intentelo de nuevo o contacte con el servicio de NutriK.");
            }
            else{
                $this->session->getFlashBag()->add('eventsOKStatus',"El evento se ha borrado correctamente.");
                $this->addLog('delete_event', $event->getIdUser(), "Evento borrado: ". $event->getTitle());
            }
        }
        return $this->redirectToRoute('nutritionist_events');
    }

    /**
     * Fn que se encarga de la modificacion de un evento
     * @param Request $request
     * @param $id_event
     * @return \Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function nutritionistEditEventAction(Request $request, $id_event){
        $categories = array();
        $tags = array();

        /**
         * Instanciamos el evento
         */
        $em = $this->getDoctrine()->getManager();
        $events_repo = $em->getRepository("NutritionistBundle:Event");
        $event = $events_repo->find($id_event);

        /**
         * Cargamos las categorias
         */
        $categories_repo = $em->getRepository("CustomsBundle:Category");
        $categories = $categories_repo->findAll();

        /**
         * Cargamos los tags
         */
        $tags_repo = $em->getRepository("CustomsBundle:Tag");
        $tags = $tags_repo->findAll();

        if($request->isMethod('POST')){
            $date = $request->request->get('event_date');
            $hour = $request->request->get('event_hour');
            $event_date = new \DateTime($date . ' ' . $hour);
            if($event_date <= new \DateTime("NOW")){
                $this->session->getFlashBag()->add('editEventKOStatus',"Se ha producido un error. La fecha y hora del evento no pueden ser inferiores a las actuales.");
            }
            else{
                $event->setIdCategory($request->request->get('event_category'));
                $event->setIdTag($request->request->get('event_tag'));
                $event->setTitle($request->request->get('event_title'));
                $event->setDescription($request->request->get('event_description'));
                $event->setEventLink($request->request->get('event_link'));
                $event->setDate($event_date);
                $event->setFrecuency($request->request->get('event_frecuency'));
                $event->setDuration($request->request->get('event_duration'));
                $event->setDateUpd(new \DateTime("NOW"));

                $em->persist($event);
                $flush = $em->flush();
                if(!empty($flush)){
                    $this->session->getFlashBag()->add('editEventKOStatus',"Se ha producido un error. No hemos podido actualizar el evento, intentelo de nuevo o contacte con el servicio de NutriK.");
                }
                else{
                    $this->session->getFlashBag()->add('editEventOKStatus',"El evento se ha modificado correctamente");
                    $this->addLog('edit_event', $event->getIdUser(), "Evento modificado: ". $event->getTitle());
                }
            }
        }

        return $this->render('@Nutritionist/nutritionist-edit-event.html.twig',
            [
                "categories" => $categories,
                "tags" => $tags,
                "id_event" => $id_event,
                "event" => $event
            ]
        );

    }

    /**
     * Fn que se encarga de renderizar el listado de clientes asociados al nutricionista loggeado
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistCustomersAction(Request $request)
    {
        $customers = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);
            if($request->isMethod('POST') && $request->request->get('customer_search') != ""){
                $key = $request->request->get('customer_search');
                $customers = $this->findCustomerByKey($key);
            }
            else{
                $customer_nutritionist_dependencies_repo = $em->getRepository("NutritionistBundle:CustomerNutritionist");
                $customer_nutritionist_dependencies = $customer_nutritionist_dependencies_repo->findBy(array("idNutritionist" => $user->getIdUser()));

                foreach($customer_nutritionist_dependencies as $dependency){
                    $customers_array = $user_repository->findBy(array("idUser" => $dependency->getIdCustomer()));
                    if(count($customers_array)>0){
                        $customers = array_merge($customers, $customers_array);
                    }
                }
            }
        }
        else{
            $this->session->getFlashBag()->add('customersKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-customers.html.twig',
            [
                "customers" => $customers
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar el listado de clientes asociados al nutricionista loggeado
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistAllCustomersAction(Request $request)
    {
        $customers = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);
            if($request->isMethod('POST') && $request->request->get('customer_search') != ""){
                $key = $request->request->get('customer_search');
                $customers = $this->findCustomerByKey($key);
            }
            else{
                $customers_customer = $user_repository->findBy(array("role" => 'ROLE_CUSTOMER'));
                $customers_guest = $user_repository->findBy(array("role" => 'ROLE_GUEST'));
                $customers = array_merge($customers_customer, $customers_guest);
            }

            if ($request->isMethod('POST') && $request->request->get('customer_dependency_ids') != ""){
                $customers_dependency = $request->request->get('customer_dependency_ids');
                foreach ($customers_dependency as $dependency){
                    $customer_nutritionist_dependency = new CustomerNutritionist();
                    $customer_nutritionist_dependency->setIdCustomer($dependency);
                    $customer_nutritionist_dependency->setIdNutritionist($user->getIdUser());
                    $customer_nutritionist_dependency->setDateAdd(new \DateTime('NOW'));
                    $em->persist($customer_nutritionist_dependency);
                    $em->flush();
                    $this->addLog('add_customer', $user->getIdUser(), "Relación con el cliente creada: ". $dependency);
                }
                $this->session->getFlashBag()->add('customersOKStatus',"Las relaciones con los clientes seleccionados se han creado correctamente.");
                return $this->redirectToRoute('nutritionist_customers');
            }
        }
        else{
            $this->session->getFlashBag()->add('customersKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-all-customers.html.twig',
            [
                "customers" => $customers
            ]
        );
    }

    /**
     * Fn que se encarga de la creacion de un cliente asociado al nutricionista loggeado
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function nutritionistAddCustomerAction(Request $request)
    {
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);

            if($request->isMethod('POST')){
                $email = $request->request->get('email');
                $customers = $user_repository->findBy(["email"=>$email]);
                if(count($customers)>0){
                    $this->session->getFlashBag()->add('customersOKStatus',"Advertencia. Ya existe un cliente con el email " . $email . ", se añade la relacion y se modifican los datos del clientes con los indicados en el formulario.");
                    $customer = reset($customers);
                }
                else {
                    $customer = new User();
                }
                $customer->setRole('ROLE_CUSTOMER');
                $customer->setIdGender(0);
                $customer->setFirstname($request->request->get('firstname'));
                $customer->setLastname($request->request->get('lastname'));
                $customer->setEmail($request->request->get('email'));
                $customer->setDescription($request->request->get('bibliografia'));
                $password = $request->request->get('password');
                $confirm_password = $request->request->get('confirm_password');
                if(isset($password) && $password != ""){
                    if($password != $confirm_password){
                        $this->session->getFlashBag()->add('addCustomerKOStatus',"Se ha producido un error. La contraseñas indicadas deben coincidir.");
                        return $this->redirectToRoute('nutritionist_add_customer');
                    }
                    else{
                        /**
                         * Cifrado de contraseña
                         */
                        $factory = $this->get('security.encoder_factory');
                        $encoder = $factory->getEncoder($customer);
                        $password = $encoder->encodePassword($password, $this->getUser()->getSalt());
                        $customer->setPassword($password);
                        $customer->setLastPasswordGen(new \DateTime('NOW'));
                    }
                }
                $customer->setDateAdd(new \DateTime('NOW'));
                $customer->setDateUpd(new \DateTime('NOW'));
                $birthday = $request->request->get('birthday');
                if($birthday !== null && $birthday != ""){
                    $customer->setBirthday(new \DateTime($birthday));
                }

                $em->persist($customer);
                if(!empty($em->flush())){
                    $this->session->getFlashBag()->add('addCustomerKOStatus', "No se han podido dar de alta el cliente, intentelo de nuevo o contacte con el servicio de NutriK.");
                }
                else{
                    $this->session->getFlashBag()->add('customersOKStatus',"El cliente se ha dado de alta correctamente");
                    $goals = $request->request->get('objetivos');
                    $weight = $request->request->get('peso');
                    $height = $request->request->get('altura');
                    $age = $request->request->get('edad');
                    $movement = $request->request->get('actividad');
                    if($goals != "" && $weight != "" && $height != "" && $age != ""){
                        $customer_metrics = new CustomerMetrics();
                        $customer_metrics->setIdCustomer($customer->getIdUser());
                        $customer_metrics->setWeight($weight);
                        $customer_metrics->setHeight($height);
                        $customer_metrics->setAge($age);
                        $customer_metrics->setMovement($movement);
                        $customer_metrics->setGoals($goals);
                        $customer_metrics->setDateAdd(new \DateTime('NOW'));
                        $em->persist($customer_metrics);
                        $em->flush();
                    }

                    $customer_nutritionist_dependency = new CustomerNutritionist();
                    $customer_nutritionist_dependency->setIdCustomer($customer->getIdUser());
                    $customer_nutritionist_dependency->setIdNutritionist($user->getIdUser());
                    $customer_nutritionist_dependency->setDateAdd(new \DateTime('NOW'));
                    $em->persist($customer_nutritionist_dependency);
                    $em->flush();
                    $this->addLog('add_customer', $user->getIdUser(), "Cliente dado de alta: ". $customer->getEmail());
                    return $this->redirectToRoute('nutritionist_customers');

                }
            }
        }
        else{
            $this->session->getFlashBag()->add('addCustomerKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }
        return $this->render('@Nutritionist/add-customer.html.twig');
    }

    /**
     * Fn que se encarga de la modificacion de un cliente asociado al nutricionista loggeado
     * @param Request $request
     * @param $id_user
     * @return \Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function nutritionistEditCustomerAction(Request $request, $id_user){
        $em = $this->getDoctrine()->getManager();

        /**
         * Cargamos el cliente
         */
        $user_repository = $em->getRepository('CustomsBundle:User');
        $customer = $user_repository->find($id_user);

        /**
         * Cargamos las metricas del cliente
         */
        $customer_metrics = array();
        $customer_metrics_repository = $em->getRepository('CustomsBundle:CustomerMetrics');
        $customer_metrics = $customer_metrics_repository->findBy(["idCustomer"=>$id_user]);
        $customer_metrics = reset($customer_metrics);

        if($request->isMethod('POST')){
            $customer->setFirstname($request->request->get('firstname'));
            $customer->setLastname($request->request->get('lastname'));
            $customer->setEmail($request->request->get('email'));
            $customer->setDescription($request->request->get('bibliografia'));

            $password = $request->request->get('password');
            $confirm_password = $request->request->get('confirm_password');
            if(isset($password) && $password != ""){
                if($password != $confirm_password){
                    $this->session->getFlashBag()->add('addCustomerKOStatus',"Se ha producido un error. La contraseñas indicadas deben coincidir.");
                    return $this->redirectToRoute('nutritionist_edit_customer');
                }
                else{
                    /**
                     * Cifrado de contraseña
                     */
                    $factory = $this->get('security.encoder_factory');
                    $encoder = $factory->getEncoder($customer);
                    $password = $encoder->encodePassword($password, $this->getUser()->getSalt());
                    $customer->setPassword($password);
                    $customer->setLastPasswordGen(new \DateTime('NOW'));
                }
            }
            $customer->setDateUpd(new \DateTime('NOW'));
            $birthday = $request->request->get('birthday');
            if($birthday !== null && $birthday != ""){
                $customer->setBirthday(new \DateTime($birthday));
            }

            $em->persist($customer);
            if(!empty($em->flush())){
                $this->session->getFlashBag()->add('editCustomerKOStatus', "No se han podido modificar los datos del cliente, intentelo de nuevo o contacte con el servicio de NutriK.");
            }
            else{
                $this->session->getFlashBag()->add('editsOKStatus',"Los datos del cliente se han modificado correctamente");
                $goals = $request->request->get('objetivos');
                $weight = $request->request->get('peso');
                $height = $request->request->get('altura');
                $age = $request->request->get('edad');
                $movement = $request->request->get('actividad');
                if($goals != "" && $weight != "" && $height != "" && $age != ""){
                    $customer_metrics = new CustomerMetrics();
                    $customer_metrics->setIdCustomer($customer->getIdUser());
                    $customer_metrics->setWeight($weight);
                    $customer_metrics->setHeight($height);
                    $customer_metrics->setAge($age);
                    $customer_metrics->setMovement($movement);
                    $customer_metrics->setGoals($goals);
                    $customer_metrics->setDateAdd(new \DateTime('NOW'));
                    $em->persist($customer_metrics);
                    $em->flush();
                }

                $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
                $user = reset($users);
                $this->session->getFlashBag()->add('customersOKStatus',"El perfil del cliente se ha modificado correctamente");
                $this->addLog('edit_customer', $user->getIdUser(), "Perfil del cliente modificado correctamente: ". $customer->getEmail());
                return $this->redirectToRoute('nutritionist_customers');
            }
        }

        return $this->render('@Nutritionist/edit-customer.html.twig',
            [
                "id_user" => $id_user,
                "customer" => $customer,
                "customer_metrics" => $customer_metrics
            ]
        );
    }

    /**
     * Fn que se encarga de la eliminacion de una relacion con un cliente y el nutricionista loggeado
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function nutritionistDeleteCustomerAction(Request $request){
        if($request->isMethod('POST')){
            $id_user = $request->request->get('_customer_dependency_delete');

            $em = $this->getDoctrine()->getManager();
            $user_repository = $em->getRepository('CustomsBundle:User');
            $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
            if(count($users) > 0) {
                $user = reset($users);
                $customer_dependencies_repo = $em->getRepository("NutritionistBundle:CustomerNutritionist");
                $customer_dependencies = $customer_dependencies_repo->findBy(["idCustomer" => $id_user, "idNutritionist" => $user->getIdUser()]);
                if(count($customer_dependencies)>0){
                    foreach ($customer_dependencies as $customer_dependency){
                        $em->remove($customer_dependency);
                        $flush = $em->flush();
                        if(!empty($flush)){
                            $this->session->getFlashBag()->add('customersKOStatus',"Se ha producido un error. No hemos podido borrar la relación con el cliente, intentelo de nuevo o contacte con el servicio de NutriK.");
                        }
                        else{
                            $this->session->getFlashBag()->add('customersOKStatus',"La relación con el cliente se ha borrado correctamente.");
                            $this->addLog('delete_customer', $user->getIdUser(), "La relación con el cliente se ha borrado correctamente: ".$id_user);
                        }
                    }
                }
            }
            else{
                $this->session->getFlashBag()->add('customersKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
            }

        }
        return $this->redirectToRoute('nutritionist_customers');
    }


    /**
     * Fn que se encarga de renderizar, modificar y añadir páginas diario del usuario loggeado
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function nutritionistDiaryAction(Request $request)
    {
        $diary_page = false;

        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);
            $today_datetime =  new \DateTime($request->request->get('date_filter'));
            $diary_pages_repo = $em->getRepository('NutritionistBundle:DiaryPages');
            $diary_pages = $diary_pages_repo->findBy(['date' => $today_datetime, 'idUser' =>$user->getIdUser()]);

            if(count($diary_pages) > 0){
                $diary_page = reset($diary_pages);
            }

            if($request->isMethod('POST') && ($request->request->get('submit') == "Guardar" && $diary_page != false)){
                $diary_page->setTasks($request->request->get('todays_tasks'));
                $diary_page->setEvents($request->request->get('todays_events'));
                $diary_page->setMemosAndNotes($request->request->get('todays_memos'));
                $em->persist($diary_page);
                $em->flush();
                $this->addLog('edit_diary_page', $user->getIdUser(), "Página de tu agenda personal modificada: " . $diary_page->getDate()->format('Y-m-d H:i:s'));
            }
            elseif($request->isMethod('POST') && ($request->request->get('submit') == "Guardar" && $diary_page == false)){
                $diary_page = new DiaryPages();
                $diary_page->setTasks($request->request->get('todays_tasks'));
                $diary_page->setEvents($request->request->get('todays_events'));
                $diary_page->setMemosAndNotes($request->request->get('todays_memos'));
                $diary_page->setDate($today_datetime);
                $diary_page->setIdUser($user->getIdUser());
                $diary_page->setDateAdd(new \DateTime('NOW'));
                $diary_page->setDateUpd(new \DateTime('NOW'));
                $em->persist($diary_page);
                $em->flush();
                $this->addLog('add_diary_page', $user->getIdUser(), "Página creada en tu agenda personal: ". $diary_page->getDate()->format('Y-m-d H:i:s'));
            }
        }
        else{
            $this->session->getFlashBag()->add('nutritionistDiaryKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-diary.html.twig',
            [
                "today_datetime" => $today_datetime,
                "diaryPage" => $diary_page
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar el listado de recetas
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistRecipesAction(Request $request)
    {
        $recipes = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);
            if($request->isMethod('POST') && $request->request->get('recipe_search') != ""){
                $key = $request->request->get('recipe_search');
                $dql_query = $em->createQuery("
                    SELECT r FROM NutritionistBundle:Recipes r
                    WHERE
                      (r.idUser = ".$user->getIdUser()." OR r.idUser = 0)
                      AND r.name LIKE '%$key%'
                ");
                $recipes = $dql_query->getResult();
            }
            else{
                $recipes_repo = $em->getRepository("NutritionistBundle:Recipes");
                /**
                 * Consultamos las recetas pertenecientes y visibles para el nutricionista loggeado
                 */
                $nutricionist_recipes = $recipes_repo->findBy(['idUser' => $user->getIdUser()]);

                /**
                 * Consultamos las recetas visibles globalmente
                 */
                $general_recipes = $recipes_repo->findBy(['idUser' => 0]);

                /**
                 * Fusionamos ambos listados de recetas para renderizalas
                 */
                $recipes = array_merge($nutricionist_recipes, $general_recipes);
            }
        }
        else{
            $this->session->getFlashBag()->add('recipesKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-recipes.html.twig',
            [
                'recipes' => $recipes
            ]
        );
    }

    /**
     * Fn que se encarga de crear una receta
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistAddRecipeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ingredients_repo = $em->getRepository("NutritionistBundle:Ingredients");

        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);
            if($request->isMethod('POST') && $request->request->get('submit') == "Guardar Receta"){
                $recipe = new Recipes();
                $description =  $request->request->get('recipe_description');
                $ingredients = $request->request->get('add_ingredients');
                $name = $request->request->get('recipe_name');
                $image_link = $request->request->get('recipe_image');
                if($description != "" && $ingredients != "" && $name != "" && $image_link != ""){
                    if($request->request->get('visibility') == 1) {
                        $recipe->setIdUser($user->getIdUser());
                    }
                    else{
                        $recipe->setIdUser(0);
                    }

                    $recipe->setName($name);
                    $recipe->setDescription($description);
                    $recipe->setImage($image_link);
                    $recipe->setDateAdd(new \DateTime('NOW'));
                    $recipe->setDateUpd(new \DateTime('NOW'));
                    $em->persist($recipe);
                    if(!empty($em->flush())){
                        $this->session->getFlashBag()->add('addRecipeKOStatus',"Se ha producido un error. No hemos podido crear la receta, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('recipesOKStatus',"La receta se ha creado correctamente");
                        $this->addLog('add_recipe', $user->getIdUser(), "Nueva receta: " . $name);
                        $ingredients = array_keys($ingredients);
                        foreach ($ingredients as $ingredient){
                            $recipe_ingredient = new IngredientsRecipes();
                            $recipe_ingredient->setIdIngredient($ingredient);
                            $recipe_ingredient->setIdRecipe($recipe->getIdRecipe());
                            $recipe_ingredient->setDateAdd(new \DateTime('NOW'));
                            $em->persist($recipe_ingredient);
                            $em->flush();
                        }
                        return $this->redirectToRoute('nutritionist_add_recipe');
                    }
                }
                else{
                    $this->session->getFlashBag()->add('addRecipeKOStatus',"Se ha producido un error. Faltan datos para la creación de la receta.");
                }
            }
            elseif ($request->isMethod('POST') && $request->request->get('submit') == "Guardar Ingrediente"){
                $name = $request->request->get('ingredient_name');
                if($name != ""){
                    $new_ingredient = new Ingredients();
                    $new_ingredient->setName($name);
                    $new_ingredient->setCarbohydrates($request->request->get('ingredient_carbs'));
                    $new_ingredient->setFats($request->request->get('ingredient_fats'));
                    $new_ingredient->setProtein($request->request->get('ingredient_protein'));
                    $new_ingredient->setDateAdd(new \DateTime('NOW'));
                    $new_ingredient->setDateUpd(new \DateTime('NOW'));
                    $em->persist($new_ingredient);
                    $em->flush();
                }
                else{
                    $this->session->getFlashBag()->add('addRecipeKOStatus',"Se ha producido un error. Debes indicar al menos el nombre del ingrediente que deseas añadir.");
                }
            }
        }
        else{
            $this->session->getFlashBag()->add('addRecipeKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        /**
         * Cargamos los ingredientes
         */
        if($request->isMethod('POST') && $request->request->get('submit') == "Buscar" && $request->request->get('search_ingredient') != ""){
            $key = $request->request->get('search_ingredient');
            $dql_query = $em->createQuery("
                SELECT i FROM NutritionistBundle:Ingredients i
                WHERE
                  i.name LIKE '%$key%'
            ");
            $all_ingredients = $dql_query->getResult();
        }
        else{
            $all_ingredients = $ingredients_repo->findAll();
        }


        return $this->render('@Nutritionist/nutritionist-add-recipe.html.twig',
            [
                'all_ingredients' => $all_ingredients
            ]
        );
    }

    /**
     * Fn que se encarga de modificar una receta
     * @param Request $request
     * @param $id_recipe
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function nutritionistEditRecipeAction(Request $request, $id_recipe)
    {
        /**
         * Cargamos la receta
         */
        $em = $this->getDoctrine()->getManager();
        $recipes_repo = $em->getRepository("NutritionistBundle:Recipes");
        $recipe = $recipes_repo->findBy(['idRecipe' => $id_recipe]);
        $recipe = reset($recipe);

        $ingredients_repo = $em->getRepository("NutritionistBundle:Ingredients");
        $recipe_ingredients_repo = $em->getRepository("NutritionistBundle:IngredientsRecipes");
        if($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();
            $user_repository = $em->getRepository('CustomsBundle:User');
            $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
            if(count($users) > 0) {
                if($request->isMethod('POST') && ($request->request->get('submit') == "Guardar Cambios")){
                    $recipe->setName($request->request->get('recipe_name'));
                    $recipe->setDescription($request->request->get('recipe_description'));
                    $recipe->setImage($request->request->get('recipe_image'));
                    $recipe->setDateUpd(new \DateTime('NOW'));

                    $em->persist($recipe);
                    if(!empty($em->flush())){
                        $this->session->getFlashBag()->add('editRecipeKOStatus',"Se ha producido un error. No hemos podido modificar la receta, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('editRecipeOKStatus',"La receta se ha modificado correctamente");
                        $this->addLog('edit_recipe', $recipe->getIdUser(), "Receta modificada: " . $recipe->getName());
                    }
                }
                elseif ($request->isMethod('POST') && ($request->request->get('submit') == "Borrar Ingredientes Seleccionados")){
                    $delete_ingredients = $request->request->get('delete_ingredients');
                    $delete_ingredients = array_keys($delete_ingredients);
                    foreach ($delete_ingredients as $delete_ingredient){
                        $ingredients = $recipe_ingredients_repo->findBy(['idIngredient' => $delete_ingredient, 'idRecipe' => $id_recipe]);
                        foreach ($ingredients as $ingr) {
                            $em->remove($ingr);
                            $em->flush();
                        }
                    }

                }
                elseif ($request->isMethod('POST') && ($request->request->get('submit') == "Añadir Ingredientes Seleccionados")){
                    $add_ingredients = $request->request->get('add_ingredients');
                    $add_ingredients = array_keys($add_ingredients);
                    foreach ($add_ingredients as $add_ingredient){
                        $recipe_ingredient = new IngredientsRecipes();
                        $recipe_ingredient->setIdIngredient($add_ingredient);
                        $recipe_ingredient->setIdRecipe($id_recipe);
                        $recipe_ingredient->setDateAdd(new \DateTime('NOW'));
                        $em->persist($recipe_ingredient);
                        $em->flush();
                    }
                }
            }
            else{
                $this->session->getFlashBag()->add('editRecipeKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
            }
        }

        $recipe_ingredients_ids = $recipe_ingredients_repo->findBy(['idRecipe' => $recipe->getIdRecipe()]);
        $recipe_ingredients = $all_ingredients = array();
        $nutritional_info = [
            'carbs' => 0,
            'fats' => 0,
            'protein' => 0
        ];

        $all_ingredients = $ingredients_repo->findAll();
        foreach ($recipe_ingredients_ids as $ingredient){
            $ingredient = $ingredients_repo->findBy(['idIngredient' => $ingredient->getIdIngredient()]);
            $ingredient = reset($ingredient);
            $recipe_ingredients[] = $ingredient;
            $nutritional_info['carbs'] += $ingredient->getCarbohydrates();
            $nutritional_info['fats'] += $ingredient->getFats();
            $nutritional_info['protein'] += $ingredient->getProtein();
        }


        return $this->render('@Nutritionist/nutritionist-edit-recipe.html.twig',
            [
                'id_recipe' => $id_recipe,
                'recipe' => $recipe,
                'recipe_ingredients' => $recipe_ingredients,
                'nutritional_info' => $nutritional_info,
                'all_ingredients' => $all_ingredients
            ]
        );
    }

    /**
     * Fn que se encarga de eliminar una receta, siempre y cuando haya sido creado por el mismo nutricionista
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function nutritionistDeleteRecipeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);
            if($request->isMethod('POST')){
                $id_recipe = $request->request->get('recipe_delete');

                $em = $this->getDoctrine()->getManager();
                $recipes_repo = $em->getRepository("NutritionistBundle:Recipes");
                $recipes = $recipes_repo->findBy(["idRecipe" => $id_recipe]);
                foreach ($recipes as $recipe){
                    if($recipe->getIdUser() == $user->getIdUser()){
                        $em->remove($recipe);
                        $flush = $em->flush();
                        if(!empty($flush)){
                            $this->session->getFlashBag()->add('recipesKOStatus',"Se ha producido un error. No puede borrar la receta, intentelo de nuevo o contacte con el servicio de NutriK.");
                        }
                        else{
                            $this->session->getFlashBag()->add('recipesOKStatus',"La receta se ha borrado correctamente.");
                            $this->addLog('delete_recipe', $recipe->getIdUser(), "Receta borrada: " . $recipe->getName());
                        }
                    }
                }
            }
        }

        return $this->redirectToRoute('nutritionist_recipes');
    }

    /**
     * Fn auxiliar que busca los clientes asocidos al nutricionista loggeado por una key
     * @param $key
     * @return array
     */
    public function findCustomerByKey($key){
        $customers = array();
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);
            $dql_query = $em->createQuery("
                SELECT u FROM CustomsBundle:User u
                INNER JOIN NutritionistBundle:CustomerNutritionist nc WITH nc.idCustomer = u.idUser
                WHERE
                  nc.idNutritionist = ".$user->getIdUser()."
                  AND (u.firstname LIKE '%$key%' OR u.lastname LIKE '%$key%' OR u.email LIKE '%$key%')
            ");
            $customers = $dql_query->getResult();
        }
        return $customers;
    }

    /**
     * Fn que se encarga de programar una consulta
     * @param Request $request
     * @return Response|null
     * @throws \Exception
     */
    public function nutritionistScheduleAppointmentAction(Request $request)
    {
        $customers = array();
        $modal_page = 1;

        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);

            if($request->isMethod('POST')  && $request->request->get('submit') == "Buscar" && $request->request->get('appointment_customer_search') != ""){
                $key = $request->request->get('appointment_customer_search');
                $customers = $this->findCustomerByKey($key);
                $modal_page = 3;
            }
            else{
                $customer_nutritionist_dependencies_repo = $em->getRepository("NutritionistBundle:CustomerNutritionist");
                $customer_nutritionist_dependencies = $customer_nutritionist_dependencies_repo->findBy(array("idNutritionist" => $user->getIdUser()));

                foreach($customer_nutritionist_dependencies as $dependency){
                    $customers_array = $user_repository->findBy(array("idUser" => $dependency->getIdCustomer()));
                    if(count($customers_array)>0){
                        $customers = array_merge($customers, $customers_array);
                    }
                }
            }

            if($request->isMethod('POST')  && $request->request->get('submit') == "Confirmar"){
                $customer = $request->request->get('appointment_customer');
                $appointment_hour = $request->request->get('appointment_hour');
                $appointment_date = $request->request->get('appointment_date');
                $appointment_type = $request->request->get('appointment_type');
                $appointment_duration = $request->request->get('appointment_duration');
                $appointment_link = $request->request->get('appointment_link');
                $appointment_description = $request->request->get('appointment_description');
                if($customer != "" && $appointment_hour != "" && $appointment_date != "" && $appointment_type != ""  && $appointment_duration != ""){
                    $appointment = new Appointment();
                    $appointment->setDate(new \DateTime($appointment_date .' '.$appointment_hour));
                    $appointment->setIdNutritionist($user->getIdUser());
                    $appointment->setIdCustomer($customer);
                    $appointment->setDescription($appointment_description);
                    $appointment->setAppointmentLink($appointment_link);
                    $appointment->setAppointmentType($appointment_type);
                    $appointment->setDuration($appointment_duration);
                    $appointment->setDateAdd(new \DateTime('NOW'));
                    $appointment->setDateUpd(new \DateTime('NOW'));
                    $em->persist($appointment);
                    if(!empty($em->flush())){
                        $this->session->getFlashBag()->add('scheduleAppointmentKOStatus',"Se ha producido un error. No se ha podido crear la consulta, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('appointmentsOKStatus',"La consulta se ha creado con exito.");
                        $this->addLog('add_appointment', $appointment->getIdNutritionist(), "Nueva consulta: " . $appointment->getDate()->format('Y-m-d H:i:s'));
                        return $this->redirectToRoute('nutritionist_appointments');
                    }
                }
                else{
                    $this->session->getFlashBag()->add('scheduleAppointmentKOStatus',"Se ha producido un error. Faltan datos necesarios para la creación de la consulta, intentelo de nuevo o contacte con el servicio de NutriK.");
                }
            }
        }
        else{
            $this->session->getFlashBag()->add('scheduleAppointmentKOStatus',"Se ha producido un error. No pueden obtener los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }
        return $this->render('@Nutritionist/schedule-appointment.html.twig',
            [
                "customers" => $customers,
                'modal_page' => $modal_page
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar las consultas de un nutricionista
     * @return Response|null
     */
    public function nutritionistAppointmentsAction(){
        $appointments = array();
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);
            $appointments_repo = $em->getRepository("NutritionistBundle:Appointment");
            $appointments = $appointments_repo->findBy(['idNutritionist' => $user->getIdUser()]);
        }

        return $this->render('@Nutritionist/nutritionist-appointments.html.twig',
            [
                "appointments" => $appointments
            ]
        );
    }

    /**
     * Fn que se encarga de borrar una consulta de un nutricionista
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function nutritionistDeleteAppointmentAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            if($request->isMethod('POST')){
                $id_apppointment = $request->request->get('appointment_delete');
                $appointments_repo = $em->getRepository("NutritionistBundle:Appointment");
                $appointments = $appointments_repo->findBy(['idAppointment' => $id_apppointment]);
                foreach ($appointments as $appointment){
                    $em->remove($appointment);
                    $flush = $em->flush();
                    if(!empty($flush)){
                        $this->session->getFlashBag()->add('appointmentsKOStatus',"Se ha producido un error. No se ha podido borrar la consulta, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('appointmentsOKStatus',"La consulta se ha borrado correctamente.");
                        $this->addLog('delete_appointment', $appointment->getIdNutritionist(), "Consulta eliminada: " . $appointment->getDate()->format('Y-m-d H:i:s'));
                    }
                }
            }
        }

        return $this->redirectToRoute('nutritionist_appointments');
    }

    /**
     * Fn que se encarga de la modificacion de la consulta de un nutricionista
     * @param Request $request
     * @param $id_appointment
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response|null
     * @throws \Exception
     */
    public function nutritionistEditAppointmentAction(Request $request, $id_appointment){
        $customers = array();

        /**
         * Instanciamos la consulta a editar
         */
        $em = $this->getDoctrine()->getManager();
        $appointments_repo = $em->getRepository("NutritionistBundle:Appointment");
        $appointment = $appointments_repo->findBy(['idAppointment' => $id_appointment]);
        $appointment = reset($appointment);

        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);
            $customer_nutritionist_dependencies_repo = $em->getRepository("NutritionistBundle:CustomerNutritionist");
            $customer_nutritionist_dependencies = $customer_nutritionist_dependencies_repo->findBy(array("idNutritionist" => $user->getIdUser()));

            foreach($customer_nutritionist_dependencies as $dependency){
                $customers_array = $user_repository->findBy(array("idUser" => $dependency->getIdCustomer()));
                if(count($customers_array)>0){
                    $customers = array_merge($customers, $customers_array);
                }
            }

            if($request->isMethod('POST')  && $request->request->get('submit') == "Confirmar"){
                $customer = $request->request->get('appointment_customer');
                $appointment_hour = $request->request->get('appointment_hour');
                $appointment_date = $request->request->get('appointment_date');
                $appointment_type = $request->request->get('appointment_type');
                $appointment_duration = $request->request->get('appointment_duration');
                $appointment_link = $request->request->get('appointment_link');
                $appointment_description = $request->request->get('appointment_description');
                if($customer != "" && $appointment_hour != "" && $appointment_date != "" && $appointment_type != ""  && $appointment_duration != ""){
                    $appointment->setDate(new \DateTime($appointment_date .' '.$appointment_hour));
                    $appointment->setIdCustomer($customer);
                    $appointment->setDescription($appointment_description);
                    $appointment->setAppointmentLink($appointment_link);
                    $appointment->setAppointmentType($appointment_type);
                    $appointment->setDuration($appointment_duration);
                    $appointment->setDateUpd(new \DateTime('NOW'));
                    $em->persist($appointment);
                    if(!empty($em->flush())){
                        $this->session->getFlashBag()->add('editAppointmentKOStatus',"Se ha producido un error. No se ha podido modificar la consulta, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('appointmentsOKStatus',"La consulta se ha modificado con exito.");
                        $this->addLog('edit_appointment', $appointment->getIdNutritionist(), "Consulta modificada: " . $appointment->getDate()->format('Y-m-d H:i:s'));
                        return $this->redirectToRoute('nutritionist_appointments');
                    }
                }
                else{
                    $this->session->getFlashBag()->add('editAppointmentKOStatus',"Se ha producido un error. Faltan datos necesarios para la modificación de la consulta, intentelo de nuevo o contacte con el servicio de NutriK.");
                }
            }
        }

        return $this->render('@Nutritionist/nutritionist-edit-appointment.html.twig',
            [
                'id_appointment' => $id_appointment,
                'appointment' => $appointment,
                'customers' => $customers
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar los distintos eventos y notificaciones en el calendario
     * @return Response|null
     * @throws \Exception
     */
    public function nutritionistCalendarAction()
    {
        $appointments = $calendar_events = $events = array();
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);

            /**
             * Appointments
             */
            $appointments_repo = $em->getRepository("NutritionistBundle:Appointment");
            $appointments = $appointments_repo->findBy(['idNutritionist' => $user->getIdUser()]);

            /**
             * Events
             */
            $events_repo = $em->getRepository("NutritionistBundle:Event");
            $events = $events_repo->findBy(array("idUser" => $user->getIdUser()));

            /**
             * Format appointments as calendar events
             */
            foreach ($appointments as $appointment){
                $id_appointment = $appointment->getIdAppointment();
                $start_date = $appointment->getDate();
                $end_date = new \DateTime($appointment->getDate()->format('Y-m-d H:i:s'));
                $end_date->modify('+'.$appointment->getDuration().' minutes');
                $calendar_events[] = [
                    'id' => $id_appointment,
                    'title' => $appointment->getDescription(),
                    'start' => $start_date,
                    'end' => $end_date,
                    'url' => '/web/nutritionist-edit-appointment/'.$id_appointment
                ];
            }

            /**
             * Format events as calendar events
             */
            foreach ($events as $event){
                $id_event = $event->getIdEvent();
                $start_date = $event->getDate();
                $end_date = new \DateTime($event->getDate()->format('Y-m-d H:i:s'));
                $end_date->modify('+'.$event->getDuration().' minutes');
                $calendar_events[] = [
                    'id' => $id_event,
                    'title' => $event->getTitle(),
                    'start' => $start_date,
                    'end' => $end_date,
                    'url' => '/web/nutritionist-edit-event/'.$id_event
                ];
            }
        }
        else{
            $this->session->getFlashBag()->add('calendarKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Nutritionist/nutritionist-calendar.html.twig',
            [
                "calendar_events" => $calendar_events
            ]
        );
    }

    /**
     * Fn auxiliar que crea un log
     * @param $source
     * @param $id_user
     * @param $context
     */
    public function addLog($source, $id_user, $context){
        $em = $this->getDoctrine()->getManager();
        $log = new Logs();
        $log->setIdUser($id_user);
        $log->setContext($context);
        $log->setSource($source);
        $log->setDateAdd(new \DateTime('NOW'));
        $em->persist($log);
        $em->flush();
    }
}
