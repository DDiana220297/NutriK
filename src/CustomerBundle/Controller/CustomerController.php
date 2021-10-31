<?php

namespace CustomerBundle\Controller;

use CustomsBundle\Entity\CustomerMetrics;
use NutritionistBundle\Entity\DiaryPages;
use NutritionistBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class CustomerController extends Controller
{
    private $session;

    public function __construct(){
        $this->session = new Session();
    }

    /**
     * Fn que se encarga de renderizar la vista "about" de NutriK
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function aboutAction()
    {
        return $this->render('@Customer/about.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function servicesAction(Request $request)
    {
        if ($request->isMethod('POST')){
            $this->session->getFlashBag()->add('servicesOKStatus',"Recibirás un correo para seguir con el proceso de contratacion del servicio elegido");
        }

        return $this->render('@Customer/services.html.twig');
    }

    /**
     * Fn que se encarga de renderizar las ultimas novedeades en NutriK
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function newsAction()
    {
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $today = new \DateTime('NOW');
            $lastWeek = date("Y-m-d H:i:s", strtotime("-7 days"));
            $new_events_query = $em->createQuery("
                    SELECT e FROM NutritionistBundle:Event e
                    WHERE e.dateAdd BETWEEN '".$lastWeek."' AND '".$today->format('Y-m-d H:i:s')."'
                ");
            $new_events = $new_events_query->getResult();

            $new_didactic_content_query = $em->createQuery("
                    SELECT e FROM CustomsBundle:Entry e
                    WHERE e.dateAdd BETWEEN '".$lastWeek."' AND '".$today->format('Y-m-d H:i:s')."'
                ");
            $new_didactic_contents = $new_didactic_content_query->getResult();
        }
        else{
            $this->session->getFlashBag()->add('newsKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Customer/news.html.twig',
            [
                'new_events' => $new_events,
                'new_didactic_contents' => $new_didactic_contents
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar las entradas de contenido didactico
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function didacticContentAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categories_repo = $em->getRepository("CustomsBundle:Category");
        $categories = $categories_repo->findAll();

        $entries_repo = $em->getRepository("CustomsBundle:Entry");
        if ($request->isMethod('POST') && $request->request->get('submit') == 'categorySearch'){
            $category_filter = $request->request->get('category_search');
            $entries = $entries_repo->findBy(['idCategory'=>1]);
        }
        elseif($request->isMethod('POST') && $request->request->get('submit') == 'entrySearch' && $request->request->get('entry_search') != ""){
            $key = $request->request->get('entry_search');
            $didactic_content_query = $em->createQuery("
                    SELECT e FROM CustomsBundle:Entry e
                    WHERE (e.title LIKE '%$key%' OR e.description LIKE '%$key%' OR e.content LIKE '%$key%')
                ");
            $entries = $didactic_content_query->getResult();
        }
        else{
            $entries = $entries_repo->findAll();
        }

        return $this->render('@Customer/didactic-content.html.twig',
            [
                'categories' => $categories,
                'entries' => $entries
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar la vista de un evento
     * @param $id_event
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function eventViewAction($id_event){
        $em = $this->getDoctrine()->getManager();
        $events_repo = $em->getRepository("NutritionistBundle:Event");
        $event = $events_repo->findBy(['idEvent' => $id_event]);
        if(count($event)>0){
            $event = reset($event);
        }
        else{
            $this->session->getFlashBag()->add('eventKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }
        return $this->render('@Customer/event-view.html.twig',
            [
                'id_event' => $id_event,
                'event' => $event
            ]
        );
    }

    /**
     * Fn que se encarga de rendizar la vista de una entrada de contenido didactico
     * @param $id_entry
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function didactiContentViewAction($id_entry){
        $em = $this->getDoctrine()->getManager();
        $entries_repo = $em->getRepository("CustomsBundle:Entry");
        $entry = $entries_repo->findBy(['idEntry' => $id_entry]);
        if(count($entry)>0){
            $entry = reset($entry);
        }
        else{
            $this->session->getFlashBag()->add('entryKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Customer/didactic-content-view.html.twig',
            [
                'id_entry' => $id_entry,
                'entry' => $entry
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar y modificar los datos personales del cliente
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function personalDataAction(Request $request){
        $user = $customer_metrics = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);

            /**
             * Comprobamos si el cliente tiene metricas registradas
             */
            $customer_metrics_query = $em->createQuery("
                    SELECT cm FROM CustomsBundle:CustomerMetrics cm
                    WHERE cm.idCustomer = ".$user->getIdUser()." ORDER BY cm.dateAdd DESC
                ");
            $customer_metrics = $customer_metrics_query->getResult();

            if($request->isMethod('POST')){
                $user->setFirstname($request->request->get('firstname'));
                $user->setLastname($request->request->get('lastname'));
                $user->setEmail($request->request->get('email'));
                $user->setDescription($request->request->get('bibliografia'));

                $password = $request->request->get('password');
                $confirm_password = $request->request->get('confirm_password');
                if(isset($password) && $password != ""){
                    if($password != $confirm_password){
                        $this->session->getFlashBag()->add('personalDataKOStatus',"Se ha producido un error. La contraseñas indicadas deben coincidir.");
                        return $this->redirectToRoute('customer_personal_data');
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
                $user->setDateUpd(new \DateTime('NOW'));
                $birthday = $request->request->get('birthday');
                if($birthday !== null && $birthday != ""){
                    $user->setBirthday(new \DateTime($birthday));
                }

                $em->persist($user);
                if(!empty($em->flush())){
                    $this->session->getFlashBag()->add('personalDataKOStatus', "No se han podido modificar los datos del cliente, intentelo de nuevo o contacte con el servicio de NutriK.");
                }
                else{
                    $this->session->getFlashBag()->add('personalDataOKStatus',"Los datos del cliente se han modificado correctamente");
                    $goals = $request->request->get('objetivos');
                    $weight = $request->request->get('peso');
                    $height = $request->request->get('altura');
                    $age = $request->request->get('edad');
                    $movement = $request->request->get('actividad');
                    if($goals != "" && $weight != "" && $height != "" && $age != ""){
                        $customer_metrics = new CustomerMetrics();
                        $customer_metrics->setIdCustomer($user->getIdUser());
                        $customer_metrics->setWeight($weight);
                        $customer_metrics->setHeight($height);
                        $customer_metrics->setAge($age);
                        $customer_metrics->setMovement($movement);
                        $customer_metrics->setGoals($goals);
                        $customer_metrics->setDateAdd(new \DateTime('NOW'));
                        $em->persist($customer_metrics);
                        $em->flush();
                    }
                    return $this->redirectToRoute('customer_personal_data');
                }
            }
        }
        else{
            $this->session->getFlashBag()->add('personalDataKOStatus',"Se ha producido un error. No pueden obtener los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }
        return $this->render('@Customer/personal-data.html.twig',
            [
                "customer" => $user,
                "customer_metrics" => reset($customer_metrics)
            ]
        );
    }

    /**
     * Fn que se encarga de la creacion, modificacion y renderizacion de las paginas de la agenda personal del usuario loggeado
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function diaryAction(Request $request){
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
            }
        }
        else{
            $this->session->getFlashBag()->add('customerDiaryKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }


        return $this->render('@Customer/diary.html.twig',
            [
                "today_datetime" => $today_datetime,
                "diaryPage" => $diary_page
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar las recetas para el usuario
     * @param Request $request
     * @param int $id_recipe
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function recipesAction(Request $request, $id_recipe = 0){
        $em = $this->getDoctrine()->getManager();
        $recipe_ingredients = $nutritional_info = array();
        /**
         * Comprobamos si se debe renderizar una receta en concreto
         */
        if($id_recipe){
            $recipes_repository = $em->getRepository('NutritionistBundle:Recipes');
            $recipe = $recipes_repository->findBy(['idRecipe' => $id_recipe]);
            $recipe = reset($recipe);

            $ingredients_repo = $em->getRepository("NutritionistBundle:Ingredients");
            $recipe_ingredients_repo = $em->getRepository("NutritionistBundle:IngredientsRecipes");

            $recipe_ingredients_ids = $recipe_ingredients_repo->findBy(['idRecipe' => $recipe->getIdRecipe()]);
            $nutritional_info = [
                'carbs' => 0,
                'fats' => 0,
                'protein' => 0
            ];

            foreach ($recipe_ingredients_ids as $ingredient){
                $ingredient = $ingredients_repo->findBy(['idIngredient' => $ingredient->getIdIngredient()]);
                $ingredient = reset($ingredient);
                $recipe_ingredients[] = $ingredient;
                $nutritional_info['carbs'] += $ingredient->getCarbohydrates();
                $nutritional_info['fats'] += $ingredient->getFats();
                $nutritional_info['protein'] += $ingredient->getProtein();
            }
        }
        else{
            $recipe = false;
        }

        /**
         * Cargamos todas las recetas o las recetas por filtro si procede
         */
        $recipes_repo = $em->getRepository("NutritionistBundle:Recipes");
        $recipes = $recipes_repo->findAll();
        if($request->isMethod('POST') && $request->request->get('recipe_search') != ""){
            $key = $request->request->get('recipe_search');
            $dql_query = $em->createQuery("
                    SELECT r FROM NutritionistBundle:Recipes r
                    WHERE r.name LIKE '%$key%'
                ");
            $recipes = $dql_query->getResult();
            $recipe = false;
        }
        elseif($request->isMethod('POST')){
            $recipe = false;
        }


        return $this->render('@Customer/recipes.html.twig',
            [
                "id_recipe" => $id_recipe,
                "recipe" => $recipe,
                "recipes" => $recipes,
                'recipe_ingredients' => $recipe_ingredients,
                'nutritional_info' => $nutritional_info,
            ]
        );
    }

    /**
     * Fn que se encarga de renderizar el progreso de un cliente y registrar nuevas metricas
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function progressAction(Request $request){
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);

            if($request->isMethod('POST')){
                $customer_metrics = new CustomerMetrics();
                $customer_metrics->setIdCustomer($user->getIdUser());
                $customer_metrics->setWeight($request->request->get('weight'));
                $customer_metrics->setHeight($request->request->get('height'));
                $customer_metrics->setAge($request->request->get('age'));
                $customer_metrics->setMovement($request->request->get('actividad'));

                $fat_percentage = $request->request->get('fat_percentage');
                if($fat_percentage != ""){
                    $customer_metrics->setFatPercentage($fat_percentage);
                }

                $muscle_percentage = $request->request->get('muscle_percentage');
                if($muscle_percentage != ""){
                    $customer_metrics->setMusclePercentage($muscle_percentage);
                }

                $liquids_percentage = $request->request->get('liquids_percentage');
                if($liquids_percentage != ""){
                    $customer_metrics->setLiquidPercentage($liquids_percentage);
                }

                $customer_metrics->setDateAdd(new \DateTime('NOW'));
                $em->persist($customer_metrics);
                if(!empty($em->flush())){
                    $this->session->getFlashBag()->add('progressKOStatus',"Se ha producido un error en el registro de sus métricas, intentelo de nuevo o contacte con el servicio de NutriK.");
                }
                else{
                    $this->session->getFlashBag()->add('progressOKStatus',"Sus métricas se han registrado correctamente.");
                }
            }
            $customer_metrics_query = $em->createQuery("
                    SELECT cm FROM CustomsBundle:CustomerMetrics cm
                    WHERE
                      cm.idCustomer = ".$user->getIdUser()." ORDER BY cm.dateAdd DESC
                    ");
            $customer_metrics = $customer_metrics_query->getResult();
            $customer_metrics = reset($customer_metrics);
        }
        else{
            $this->session->getFlashBag()->add('progressKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }

        return $this->render('@Customer/progress.html.twig',
            [
                "customer_metrics" => $customer_metrics
            ]
        );
    }


    /**
     * Fn que se encarga de renderizar el calendario del cliente con sus eventos
     * @return \Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function calendarAction(){
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
            $appointments = $appointments_repo->findBy(['idCustomer' => $user->getIdUser()]);

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

        return $this->render('@Customer/calendar.html.twig',
            [
                "calendar_events" => $calendar_events
            ]
        );
    }

    /**
     * Fn que se encarga de añadir un evento para el cliente, se omiten los campos no necesarios para este
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response|null
     * @throws \Exception
     */
    public function addEventAction(Request $request){
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);

            /**
             * Events
             */
            $events_repo = $em->getRepository("NutritionistBundle:Event");
            $events = $events_repo->findBy(array("idUser" => $user->getIdUser()));

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
                    $event->setIdCategory(0);
                    $event->setIdTag(0);
                    $event->setTitle($request->request->get('event_title'));
                    $event->setDescription($request->request->get('event_description'));
                    $event->setEventLink("");
                    $event->setDate($event_date);
                    $event->setDuration($request->request->get('event_duration'));
                    $event->setDateAdd(new \DateTime("NOW"));
                    $event->setDateUpd(new \DateTime("NOW"));

                    $em->persist($event);
                    $flush = $em->flush();
                    if(!empty($flush)){
                        $this->session->getFlashBag()->add('addEventKOStatus',"Se ha producido un error. No hemos podido crear el evento, intentelo de nuevo o contacte con el servicio de NutriK.");
                    }
                    else{
                        $this->session->getFlashBag()->add('calendarOKStatus',"El evento se ha creado correctamente");
                        return $this->redirectToRoute('customer_calendar');
                    }
                }
            }
        }
        return $this->render('@Customer/customer-add-event.html.twig',
            [
                "events" => $events
            ]
        );
    }

    /**
     * Fn que se encarga de la mensajeria entre usuarios
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function messengerAction(){
        return $this->render('@Customer/messenger-services.html.twig');
    }
}
