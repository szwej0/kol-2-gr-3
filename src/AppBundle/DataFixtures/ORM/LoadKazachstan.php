<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Kazachstan;

class LoadKazachstan implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/kazachstan.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $kazachstan = new Kazachstan();
            $kazachstan->setName($item['name']);
            $kazachstan->setLength($item['depth']);
            $manager->persist($kazachstan);
        }

        $manager->flush();
    }
}