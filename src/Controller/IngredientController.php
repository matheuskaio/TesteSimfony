<?php

namespace App\Controller;

use App\Entity\Ingredient;
use App\Helper\HandleRequest;
use App\Helper\IngredientFactory;
use App\Repository\IngredientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class IngredientController extends GenericController
{
    public function __construct(
        EntityManagerInterface $entityManager,
        IngredientFactory $ingredientFactory,
        IngredientRepository $ingredientRepository,
        HandleRequest $handleRequest
    )
    {
        parent::__construct($ingredientRepository,$entityManager,$ingredientFactory,$handleRequest);
    }
    public function searchByCooker(int $id): Response
    {
        $ingredients = $this->objectRepository->findBy([
            'cooker' => $id
        ]);
        return new JsonResponse($ingredients);
    }
    /**
     * @param Ingredient $entity
     * @param Ingredient $entityUpdate
     */
    public function updateEntity($entity,$entityUpdate)
    {
        $entity->setWord($entityUpdate->getWord());
    }
}
