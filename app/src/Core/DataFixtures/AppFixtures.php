<?php

declare(strict_types=1);

namespace App\Core\DataFixtures;

use App\Core\Entity\Domain;
use App\Core\Entity\Module;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $domain1 = new Domain();
        $domain1->setName('domain1.test.loc');
        $module1 = new Module();
        $module1->setName('module1');
        $module1->addDomain($domain1);
        $manager->persist($module1);

        $domain2 = new Domain();
        $domain2->setName('domain2.test.loc');
        $module2 = new Module();
        $module2->setName('module2');
        $module2->addDomain($domain2);
        $manager->persist($module2);

        $manager->flush();
    }
}
