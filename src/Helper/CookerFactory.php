<?php


namespace App\Helper;


use App\Entity\Cooker;

class CookerFactory implements EntityFactory
{
    public function create(string $json):Cooker
    {
        $content = json_decode($json);
        $cooker = new Cooker();
        $cooker->setName($content->name);
        return $cooker;
    }
}