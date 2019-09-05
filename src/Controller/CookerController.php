<?php

namespace App\Controller;

use App\Entity\Cooker;
use App\Helper\CookerFactory;
use App\Helper\HandleRequest;
use App\Repository\CookerRepository;
use Doctrine\ORM\EntityManagerInterface;

class CookerController extends GenericController
{
    public function __construct(
        EntityManagerInterface $entityManager,
        CookerFactory $cookerFactory,
        CookerRepository $cookerRepository,
        HandleRequest $handleRequest
    )
    {
        parent::__construct($cookerRepository,$entityManager,$cookerFactory,$handleRequest);
    }


    /**
     * @param Cooker $entity
     * @param Cooker $entityUpdate
     */
    public function updateEntity($entity, $entityUpdate)
    {
        $entity->setName($entityUpdate->setName());
    }
}
