<?php

namespace AppBundle\Controller;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class EventsController extends Controller
{
    /**
     * @Route("/events")
     */
    public function indexAction()
    {
        $currentTime = (new DateTime())->format('d/m/Y H:i:s');
        $events = ['Symfony Conference','Laravel Conference','Django Conference'];
        return $this->render('events/index.html.twig',compact('events','currentTime'));
    }
}