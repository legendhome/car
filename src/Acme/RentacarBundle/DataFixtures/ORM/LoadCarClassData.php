<?php
/**
 * Created by IntelliJ IDEA.
 * User: i-tsumuraya
 * Date: 2013/06/18
 * Time: 17:18
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\CarClassBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\RentacarBundle\Entity\CarClass;

class LoadCarClassData extends AbstractFixture implements
OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $carClass1 = new CarClass();
        $carClass1->setID(1);
        $carClass1->setName('A');
        $carClass1->setCarTypes('プリウス、SAIなど');
        $carClass1->setSeats(7);
        $carClass1->setImage('bundles/acmerentacar/images/car/prius.png');
        $carClass1->setPrice3(5000);
        $carClass1->setPrice6(7000);
        $carClass1->setPrice12(9000);
        $carClass1->setPrice24(11000);
        $carClass1->setInsurancePrice(1000);
        $carClass1->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
        $carClass1->setUpdatedAt(new \DateTime(date('Y-m-d H:i:s')));

        $carClass2 = new CarClass();
        $carClass2->setId(2);
        $carClass2->setName('W');
        $carClass2->setCarTypes('エスティマ、アルファードなど');
        $carClass2->setSeats(8);
        $carClass2->setImage('bundles/acmerentacar/images/car/estima.png');
        $carClass2->setPrice3(10000);
        $carClass2->setPrice6(13000);
        $carClass2->setPrice12(165000);
        $carClass2->setPrice24(200000);
        $carClass2->setInsurancePrice(1000);
        $carClass2->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
        $carClass2->setUpdatedAt(new \DateTime(date('Y-m-d H:i:s')));

        $manager->persist($carClass1);
        $manager->persist($carClass2);
        $manager->flush();

        $this->addReference('car-class-1', $carClass1);
        $this->addReference('car-class-2', $carClass2);
    }

    public function getOrder()
    {
        return 1;
    }
}
