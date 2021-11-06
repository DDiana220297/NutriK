<?php

namespace CustomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(){
        $logs = $events = $appointments = array();
        $calendar_appointments = $calendar_events = $calendar_events = array();
        /**
         * Instanciamos el user con el email del usuario logeado
         */
        $em = $this->getDoctrine()->getManager();
        $user_repository = $em->getRepository('CustomsBundle:User');
        $users = $user_repository->findBy(array("email" => $this->getUser()->getUsername()));
        if(count($users) > 0){
            $user = reset($users);
            if ($user->getRole() == 'ROLE_NUTR'){
                $today = new \DateTime('NOW');
                $appointments_query = $em->createQuery("
                    SELECT a FROM NutritionistBundle:Appointment a
                    WHERE
                      a.idNutritionist = ".$user->getIdUser()."
                      AND a.date > '".$today->format('Y-m-d H:i:s')."'
                ");
                $appointments = $appointments_query->getResult();

                $events_query = $em->createQuery("
                    SELECT e FROM NutritionistBundle:Event e
                    WHERE
                      e.idUser = ".$user->getIdUser()."
                      AND e.date > '".$today->format('Y-m-d H:i:s')."'
                ");
                $events = $events_query->getResult();

                $lastWeek = date("Y-m-d H:i:s", strtotime("-7 days"));
                $logs_query = $em->createQuery("
                    SELECT l FROM CustomsBundle:Logs l
                    WHERE
                      l.idUser = ".$user->getIdUser()."
                      AND l.dateAdd BETWEEN '".$lastWeek."' AND '".$today->format('Y-m-d H:i:s')."'
                ");
                $logs = $logs_query->getResult();

                /**
                 * Format appointments as calendar events
                 */
                $appointments_repo = $em->getRepository("NutritionistBundle:Appointment");
                $calendar_appointments = $appointments_repo->findBy(['idNutritionist' => $user->getIdUser()]);
                if (count($calendar_appointments) > 0){
                    foreach ($calendar_appointments as $appointment){
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
                }

                /**
                 * Format events as calendar events
                 */

//                $events_repo = $em->getRepository("NutritionistBundle:Event");
//                $calendar_events = $events_repo->findBy(array("idUser" => $user->getIdUser()));
//                if (count($calendar_events)>0){
//                    foreach ($calendar_events as $event){
//                        $id_event = $event->getIdEvent();
//                        $start_date = $event->getDate();
//                        $end_date = new \DateTime($event->getDate()->format('Y-m-d H:i:s'));
//                        $end_date->modify('+'.$event->getDuration().' minutes');
//                        $calendar_events[] = [
//                            'id' => $id_event,
//                            'title' => $event->getTitle(),
//                            'start' => $start_date,
//                            'end' => $end_date,
//                            'url' => '/web/nutritionist-edit-event/'.$id_event
//                        ];
//                    }
//                }
            }
        }
        return $this->render('@Customs/index.html.twig',
            [
                'appointments' => $appointments,
                'events' => $events,
                'logs' => $logs,
                "calendar_events" => $calendar_events
            ]
        );
    }
}
