<?php

namespace App\DataFixtures;

use App\Entity\NosActus;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NosActusFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        
        $NosActus = new NosActus();
        $NosActus->setTitre('Bienvenue nouveau membre');
        $NosActus->setImageName('coursformation.jpg');
        $NosActus->setDescription('soyez la bienvenu(e)');
        $NosActus->setCommentaire('tout va bien');
        $NosActus->setIsActive(true);

        $manager->persist($NosActus);

        $manager->flush();
    }
}
