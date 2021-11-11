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
     * Fn auxiliar para comprobar si el cliente tiene correo pendiente
     * @return int|void
     */
    public function checkPendingInbox(){
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);
            $messages_query = $em->createQuery("
                    SELECT m FROM CustomsBundle:Message m
                    WHERE m.idUserTo = ".$user->getIdUser()." AND m.messageRead = 0
                ");
            $messages = $messages_query->getResult();
            if(count($messages)>0){
                return 1;
            }
            else{
                return 0;
            }
        }
    }

    /**
     * Fn que se encarga de renderizar la vista "about" de NutriK
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function aboutAction()
    {
        return $this->render('@Customer/about.html.twig',
            [
                'pending_inbox' => $this->checkPendingInbox()
            ]
        );
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

        return $this->render('@Customer/services.html.twig',
            [
                'pending_inbox' => $this->checkPendingInbox()
            ]
        );
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
                'new_didactic_contents' => $new_didactic_contents,
                'pending_inbox' => $this->checkPendingInbox()
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
                'entries' => $entries,
                'pending_inbox' => $this->checkPendingInbox()
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
                'event' => $event,
                'pending_inbox' => $this->checkPendingInbox()
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
                'entry' => $entry,
                'pending_inbox' => $this->checkPendingInbox()
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
                "customer_metrics" => reset($customer_metrics),
                'pending_inbox' => $this->checkPendingInbox()
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
                "diaryPage" => $diary_page,
                'pending_inbox' => $this->checkPendingInbox()
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
                'pending_inbox' => $this->checkPendingInbox()
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
                "customer_metrics" => $customer_metrics,
                'pending_inbox' => $this->checkPendingInbox()
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
                "calendar_events" => $calendar_events,
                'pending_inbox' => $this->checkPendingInbox()
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
                "events" => $events,
                'pending_inbox' => $this->checkPendingInbox()
            ]
        );
    }

    /**
     * Fn que se encarga de la mensajeria entre usuarios
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function messengerAction(Request $request, $id_message = 0){
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $customer_nutritionist_dependencies_repo = $em->getRepository("NutritionistBundle:CustomerNutritionist");
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0) {
            $user = reset($users);
            $inbox_users = $inbox = $sent_inbox = $sent_inbox_threads = $inbox_threads = array();
            $message_repo = $em->getRepository('CustomsBundle:Message');

            /**
             * Si estamos abriendo un mensaje, vamos a marcarlo como leido
             */
            if($id_message != 0){
                $message = $message_repo->findBy(array('idMessage' => $id_message));
                if(count($message)>0){
                    $message = reset($message);
                    if($message->getIdUserTo() == $user->getIdUser()){
                        $message->setDateRead(new \DateTime('NOW'));
                        $message->setMessageRead(1);
                        $em->persist($message);
                        $em->flush();
                    }
                }
            }

            if($request->isMethod('POST')  && $request->request->get('submit') == "Responder"){
                /**
                 * Cargamos los datos del mensaje al que estamos respondiendo
                 */
                $id_message_reply = $request->request->get('repply_id_message');
                $message = $message_repo->findBy(array('idMessage' => $id_message_reply));
                $message = reset($message);

                $reply_message_content = $request->request->get('reply_message_content');
                if ($reply_message_content != ""){
                    /**
                     * Construimos el nuevo mensaje
                     */
                    $reply_message = new \CustomsBundle\Entity\Message();
                    $reply_message->setIdUserFrom($user->getIdUser());
                    $reply_message->setIdUserTo($message->getIdUserFrom());
                    $reply_message->setContent($request->request->get('reply_message_content'));
                    $reply_message->setDateAdd(new \DateTime('NOW'));

                    /**
                     * Reply Subject
                     */
                    $subject = $message->getSubject();
                    $subject = 0 == strpos($subject, '[Re]') ? $message->getSubject() :  '[Re]' . $message->getSubject();
                    $reply_message->setSubject($subject);

                    $em->persist($reply_message);
                    $em->flush();
                    $this->session->getFlashBag()->add('messengerOKStatus','Mensaje respondido correctamente.');
                }
                else{
                    $this->session->getFlashBag()->add('messengerKOStatus','Debes indicar el contenido de la respuesta.');
                }
            }
            elseif ($request->isMethod('POST')  && $request->request->get('submit') == "Enviar"){
                $new_inbox_receivers = $request->request->get('new_inbox_receivers');
                $message_content = $request->request->get('message_content');
                $message_subject = $request->request->get('message_subject');
                if($new_inbox_receivers != ""){
                    if($message_content != "" && $message_subject != ""){
                        foreach ($new_inbox_receivers  as $new_inbox_receiver){
                            $message = new \CustomsBundle\Entity\Message();
                            $message->setIdUserFrom($user->getIdUser());
                            $message->setIdUserTo($new_inbox_receiver);
                            $message->setContent($message_content);
                            $message->setSubject($message_subject);
                            $message->setDateAdd(new \DateTime('NOW'));
                            $em->persist($message);
                            $em->flush();
                        }
                        $this->session->getFlashBag()->add('messengerOKStatus','Mensaje enviado correctamente.');
                    }
                    else{
                        $this->session->getFlashBag()->add('messengerKOStatus','Debes indicar el contenido y asunto para el nuevo mensaje.');
                    }
                }
                else{
                    $this->session->getFlashBag()->add('messengerKOStatus','Debes indicar al menos un destinatario para el nuevo mensaje.');
                }
            }


            /**
             * Para cada mensaje recibido, consultamos el hilo mantenido con el remitente y cargamos los datos del mismo
             */
            $inbox = $message_repo->findBy(array('idUserTo' => $user->getIdUser()));
            foreach ($inbox as $in){
                $from = $user_repository->findBy(array('idUser' => $in->getIdUserFrom()));
                $from = reset($from);

                $dql_query = $em->createQuery("
                    SELECT m FROM CustomsBundle:Message m
                    WHERE
                      (m.idUserFrom = ".$in->getIdUserFrom()." AND m.idUserTo = ".$user->getIdUser().")
                      OR (m.idUserFrom = ".$user->getIdUser()." AND m.idUserTo = ".$in->getIdUserFrom().")
                      ORDER BY m.dateAdd ASC
                ");
                $threads = $dql_query->getResult();
                if(count($threads)>0 && $threads != false){
                    foreach ($threads as $thread){
                        $inbox_threads[$in->getIdMessage()][] = [
                            'date_add' => $thread->getDateAdd(),
                            'date_read' => $thread->getDateRead(),
                            'content' => $thread->getContent(),
                            'subject' => $thread->getSubject(),
                            'id_user_to' => $thread->getIdUserFrom(),
                            'id_user_from' => $thread->getIdUserTo(),
                            'firstname_user_from' => $from->getFirstname(),
                            'lastname_user_from' => $from->getLastname(),
                            'email_user_from' => $from->getEmail()
                        ];
                    }
                }
            }

            /**
             * Para cada mensaje enviado, consultamos el hilo mantenido con el remitente y cargamos los datos del mismo
             */
            $sent_inbox = $message_repo->findBy(array('idUserFrom' => $user->getIdUser()));
            foreach ($sent_inbox as $out){
                $to = $user_repository->findBy(array('idUser' => $out->getIdUserTo()));
                $to = reset($to);

                $dql_query = $em->createQuery("
                    SELECT m FROM CustomsBundle:Message m
                    WHERE
                      (m.idUserFrom = ".$out->getIdUserTo()." AND m.idUserTo = ".$user->getIdUser().")
                      OR (m.idUserFrom = ".$user->getIdUser()." AND m.idUserTo = ".$out->getIdUserTo().")
                      ORDER BY m.dateAdd ASC
                ");
                $threads = $dql_query->getResult();
                if(count($threads)>0 && $threads != false){
                    foreach ($threads as $thread){
                        $sent_inbox_threads[$out->getIdMessage()][] = [
                            'date_add' => $thread->getDateAdd(),
                            'date_read' => $thread->getDateRead(),
                            'content' => $thread->getContent(),
                            'subject' => $thread->getSubject(),
                            'id_user_to' => $thread->getIdUserFrom(),
                            'id_user_from' => $thread->getIdUserTo(),
                            'firstname_user_from' => $to->getFirstname(),
                            'lastname_user_from' => $to->getLastname(),
                            'email_user_from' => $to->getEmail()
                        ];
                    }
                }
            }

            if($user->getRole() == 'ROLE_NUTR'){
                /**
                 * El nutricionista podrá mantener un servicio de mensajeria con los clientes con los que tiene relacion
                 */
                $customer_nutritionist_dependencies = $customer_nutritionist_dependencies_repo->findBy(array("idNutritionist" => $user->getIdUser()));
                if (count($customer_nutritionist_dependencies)>0){
                    foreach ($customer_nutritionist_dependencies as $dependency){
                        $customers = $user_repository->findBy(array("idUser" => $dependency->getIdCustomer()));
                        if(count($customers)>0){
                            $inbox_users = array_merge($inbox_users, $customers);
                        }
                    }
                }
            }
            else{
                /**
                 * El cliente podrá mantener un servicio de mensajeria con los nutricionistas contratados y con otros usuarios de la web
                 */
                $customer_nutritionist_dependencies = $customer_nutritionist_dependencies_repo->findBy(array("idCustomer" => $user->getIdUser()));
                if (count($customer_nutritionist_dependencies)>0){
                    foreach ($customer_nutritionist_dependencies as $dependency){
                        $customers = $user_repository->findBy(array("idUser" => $dependency->getIdNutritionist()));
                        if(count($customers)>0){
                            $inbox_users = array_merge($inbox_users, $customers);
                        }
                    }
                }

                $nutrik_customers = $user_repository->findBy(array('role' => 'ROLE_CUSTOMER'));
                if(count($nutrik_customers)>0){
                    $inbox_users = array_merge($inbox_users, $nutrik_customers);
                }
            }
        }
        else {
            $this->session->getFlashBag()->add('messengerKOStatus',"Se ha producido un error. No hemos podido cargar los datos para este usuario, intentelo de nuevo o contacte con el servicio de NutriK.");
        }
        return $this->render('@Customer/messenger-services.html.twig',
            [
                'id_message' => $id_message,
                'id_user' => $user->getIdUser(),
                'inbox_users' => $inbox_users,
                'inbox' => $inbox,
                'inbox_threads' => $inbox_threads,
                'sent_inbox' => $sent_inbox,
                'sent_inbox_threads' => $sent_inbox_threads,
                'pending_inbox' => $this->checkPendingInbox()
            ]
        );
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


    public function plansAction(){
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $plans = $weekly_plans_tags = $weekly_plans_dates = array();
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $customer_plan_repo = $em->getRepository('NutritionistBundle:CustomerPlans');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users)>0){
            $user = reset($users);

            /**
             * Customer plans
             */
            $dql_query = $em->createQuery("
                    SELECT wp FROM NutritionistBundle:WeeklyPlan wp
                    INNER JOIN NutritionistBundle:CustomerPlans cp WITH cp.idPlan = wp.idPlan
                    WHERE cp.idCustomer = ". $user->getIdUser() ."
                    ORDER BY cp.dateAdd DESC");
            $plans = $dql_query->getResult();

            /**
             * Consultamos los tags de los contenidos didacticos y los rangos de fechas
             */
            foreach ($plans as $plan){
                $dql_query = $em->createQuery("
                    SELECT t FROM CustomsBundle:Tag t
                    INNER JOIN NutritionistBundle:WeeklyPlanTag wpt WITH wpt.idTag = t.idTag
                    WHERE wpt.idWeeklyPlan = ". $plan->getIdPlan() ."
                    ORDER BY t.level ASC");
                $tags = $dql_query->getResult();
                if (count($tags)>0){
                    $weekly_plans_tags[$plan->getIdPlan()] = $tags;
                }
                $customer_plan = $customer_plan_repo->findBy(array("idCustomer" => $user->getIdUser(), "idPlan" => $plan->getIdPlan()));
                $customer_plan = reset($customer_plan);
                $weekly_plans_dates[$plan->getIdPlan()] = [
                    "date_from" => $customer_plan->getDateFrom(),
                    "date_to" => $customer_plan->getDateTo()
                ];
            }

        }
        return $this->render('@Customer/weekly-plans.html.twig',
            [
                'now' => new \DateTime('NOW'),
                'plans' => $plans,
                "weekly_plans_tags" => $weekly_plans_tags,
                "weekly_plans_dates" => $weekly_plans_dates,
                'pending_inbox' => $this->checkPendingInbox()
            ]
        );
    }

    public function viewPlanAction($id_plan){
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
         * Cargamos los planes de alimentacion
         */
        $meals_repo = $em->getRepository("NutritionistBundle:Meal");

        /**
         * Cargamos los tags asociados al plan
         */
        $weekly_plan_tags_repo = $em->getRepository('NutritionistBundle:WeeklyPlanTag');

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

        /**
         * Cargamos los tags
         */
        $tags_repo = $em->getRepository("CustomsBundle:Tag");
        $tags = $tags_repo->findAll();

        /**
         * Cargamos los tags asociados a la receta
         */
        $weekly_plans_tags = $weekly_plan_tags_repo->findBy(['idWeeklyPlan' => $id_plan]);
        $weekly_plan_tags_keys = array();
        if(count($weekly_plans_tags)>0){
            foreach ($weekly_plans_tags as $tag){
                $weekly_plan_tags_keys[] = (string)$tag->getIdTag();
            }
        }

        return $this->render('@Customer/plan.html.twig',
            [
                "id_plan" => $id_plan,
                "weeklyPlan" => $plan,
                "exercises" => $exercises,
                "tags" => $tags,
                "weekly_plans_tags" => $weekly_plans_tags,
                'weekly_plan_tags_keys' => $weekly_plan_tags_keys,
                'pending_inbox' => $this->checkPendingInbox(),

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
}
