<?php

namespace NutritionistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NutritionistController extends Controller
{
    public function nutritionistAccountAction()
    {
        return $this->render('@Nutritionist/nutritionist-account.html.twig');
    }

    public function nutritionistPersonalDataAction()
    {
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
