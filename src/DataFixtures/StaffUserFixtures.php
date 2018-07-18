<?php

namespace App\DataFixtures;

use App\Entity\Place;
use App\Entity\StaffUser;
use Doctrine\Common\Persistence\ObjectManager;

class StaffUserFixtures extends BaseFixture
{
    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(StaffUser::class, 10, function( StaffUser $staffUser, $count) use ($manager) {
            $staffUser->setName($this->faker->name())
                ->setEmail($this->faker->companyEmail)
                ->setPassword('123');

            if($this->faker->boolean(10)) {
                $staffUser->setIsOwner(true);
                $staffUser->setCode($this->faker->numberBetween(100000, 999999));
            }else{
                $staffUser->setIsOwner(false);
                $staffUser->setCode('00000');
            }

            $staffUser->setPhone($this->faker->phoneNumber)
                    ->setCity($this->faker->city)
                    ->setAddress($this->faker->address)
                    ->setTables(0)
                    ->setCreatedAt($this->faker->dateTime())
                    ->setUpdatedAt($this->faker->dateTime());

            $place1 = new Place();
            $place1->setAddress($this->faker->address)
                ->setName($this->faker->firstNameFemale." diner")
                ->setEmail($this->faker->email)
                ->setCity($this->faker->city)
                ->setCountry($this->faker->country)
                ->setSlug($place1->getName().'-'.rand(1, 100))
                ->setCreatedAt($this->faker->dateTime())
                ->setUpdatedAt($place1->getCreatedAt())
                ->setTelNumber($this->faker->phoneNumber)
                ->setWebsite('www.'.$place1->getName().'.com')
                ->setStaffuser($staffUser);

            $manager->persist($place1);
            $place2 = new Place();
            $place2->setAddress($this->faker->address)
                ->setName($this->faker->firstNameFemale." diner")
                ->setEmail($this->faker->email)
                ->setCity($this->faker->city)
                ->setCountry($this->faker->country)
                ->setSlug($place1->getName().'-'.rand(1, 100))
                ->setCreatedAt($this->faker->dateTime())
                ->setUpdatedAt($place1->getCreatedAt())
                ->setTelNumber($this->faker->phoneNumber)
                ->setWebsite('www.'.$place1->getName().'.com')
                ->setStaffuser($staffUser);
            $manager->persist($place2);
        });
        $manager->flush();
    }
}
