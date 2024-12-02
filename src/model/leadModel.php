<?php

namespace model;
class LeadModel
{
    private $name;
    private $email;
    private $telephone;

    public function __construct($name, $email, $telephone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }
}