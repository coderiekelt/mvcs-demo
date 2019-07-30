<?php

namespace App\Model;

/**
 * Class Event
 * @package App\Model
 */
class Event
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var User[]
     */
    private $subscribers = [];

    /**
     * Event constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param User $user
     */
    public function addUser(User $user)
    {
        $this->subscribers[] = $user;
    }
}
