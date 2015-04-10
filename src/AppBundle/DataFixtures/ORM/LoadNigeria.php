<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Nigeria;

class LoadNigeria implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/nigeria.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $nigeria = new Nigeria();
            $nigeria->setName($item['name']);
            $nigeria->setDepth($item['depth']);
            $manager->persist($nigeria);
        }

        $manager->flush();
    }
}