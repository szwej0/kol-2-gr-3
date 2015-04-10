<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\etiopia;

class LoadEtiopia implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/etiopia.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $etiopia = new Etiopia();
            $etiopia->setName($item['name']);
            $etiopia->setDepth($item['depth']);
            $manager->persist($etiopia);
        }

        $manager->flush();
    }
}