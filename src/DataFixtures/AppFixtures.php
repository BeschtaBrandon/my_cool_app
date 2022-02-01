<?php

namespace App\DataFixtures;

use App\Entity\Task;
use App\Entity\Person;
use App\Factory\PersonFactory;
use App\Factory\RecipeFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $recipes = RecipeFactory::createMany(10);

        $persons = PersonFactory::createMany(10);

        $newPerson = new Person();
        $newPerson->setFirstName('Bob');

        $newTask0 = new Task();
        $newTask0->setTaskName('Do the dishes')->setTaskComplete(false)->setAssignee($newPerson);
        $newTask1= new Task();
        $newTask1->setTaskName('Shovel the driveway')->setTaskComplete(true)->setAssignee($newPerson);
        $newTask2 = new Task();
        $newTask2->setTaskName('Walk the dog')->setTaskComplete(true)->setAssignee($newPerson);
        
        $manager->persist($newPerson);
        $manager->persist($newTask0);
        $manager->persist($newTask1);
        $manager->persist($newTask2);

        $manager->flush();
    }
}
