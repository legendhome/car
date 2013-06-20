<?php
/**
 * Created by IntelliJ IDEA.
 * User: i-tsumuraya
 * Date: 2013/06/18
 * Time: 18:31
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\LocationBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\RentacarBundle\Entity\Location;

class LoadLocationData extends AbstractFixture implements
OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $location1 = new Location();
        $location1->setId(1);
        $location1->setName('神楽坂');
        $location1->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
        $location1->setUpdatedAt(new \DateTime(date('Y-m-d H:i:s')));

        $location2 = new Location();
        $location2->setId(2);
        $location2->setName('青山');
        $location2->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
        $location2->setUpdatedAt(new \DateTime(date('Y-m-d H:i:s')));

        $manager->persist($location1);
        $manager->persist($location2);
        $manager->flush();

        $this->addReference('location-1', $location1);
        $this->addReference('location-2', $location2);
    }

    public function getOrder()
    {
        return 1;
    }
}

?>

