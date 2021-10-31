<?php

namespace CustomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(){
        $logs = $events = $appointments = array();

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
            }
        }
        return $this->render('@Customs/index.html.twig',
            [
                'appointments' => $appointments,
                'events' => $events,
                'logs' => $logs
            ]
        );
    }
}
