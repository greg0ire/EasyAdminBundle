<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Event;

final class BeforeEntityUpdatedEvent
{
    private $entityInstance;

    public function __construct($entityInstance)
    {
        $this->entityInstance = $entityInstance;
    }

    public function getEntityInstance()
    {
        return $this->entityInstance;
    }
}