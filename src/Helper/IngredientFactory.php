<?php


namespace App\Helper;


use App\Entity\Ingredient;
use App\Repository\CookerRepository;

class IngredientFactory implements EntityFactory
{
    /**
     * @var CookerRepository
     */
    private $cookerRepository;

    public function __construct(CookerRepository $cookerRepository)
    {
        $this->cookerRepository = $cookerRepository;
    }
    public function create(string $json):Ingredient
    {

        $content = json_decode($json);
        $cooker = $this->cookerRepository->find($content->cookerId);
        $ingredient = new Ingredient();

        $ingredient
            ->setWord($content->word)
            ->setCooker($cooker);
        return $ingredient;
    }
}