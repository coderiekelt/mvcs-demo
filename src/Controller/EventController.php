<?php

namespace App\Controller;

use App\ConventionEvent\ConventionEventService;
use App\Model\Event;
use App\Model\User;
use App\User\UserProvider;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class EventController
 * @package App\Controller
 */
class EventController extends AbstractController
{
    /**
     * @var UserProvider
     */
    private $userProvider;

    /**
     * @var ConventionEventService
     */
    private $event;

    /**
     * EventController constructor.
     * @param UserProvider $userProvider
     * @param ConventionEventService $event
     */
    public function __construct(UserProvider $userProvider, ConventionEventService $event)
    {
        $this->userProvider = $userProvider;
        $this->event = $event;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function list()
    {
        return $this->render('base.html.twig', ['events' => ['dealerroom', 'gameroom']]);
    }

    /**
     * @param Event $event
     * @ParamConverter(converter="")
     */
    public function subscribe(Event $event)
    {
        $user = $this->userProvider->getCurrentUser();
        $this->event->subscribeUserToEvent($user, $event);
    }
}
