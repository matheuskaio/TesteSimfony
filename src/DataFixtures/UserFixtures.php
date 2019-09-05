<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('usuario')
            ->setPassword('$argon2id$v=19$m=65536,t=4,p=1$c2c2OHovSkQvbk85b0VNag$GIWpbfK6qGdrYFNo0ag5ynPUTvOgLvl7dwtYtBQo23w');
        $manager->persist($user);
        $manager->flush();
    }
}
