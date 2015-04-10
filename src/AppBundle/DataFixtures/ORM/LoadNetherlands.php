<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Netherlands;

class LoadNetherlands implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/netherlands.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $netherlands = new Netherlands();
            $netherlands->setName($item['name']);
            $netherlands->setDepth($item['depth']);
            $manager->persist($netherlands);
        }

        $manager->flush();
    }
}