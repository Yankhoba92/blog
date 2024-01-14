<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr-Fr');
        for ($i=0; $i < 50 ; $i++) { 

            $post = new Post();
            $post->setTitle($faker->sentence())
            ->setSlug($faker->slug())
            ->setContent($faker->paragraphs(5, true))
            ->setImage('https://via.placeholder.com/350x150')
            ->setCreatedAt(new DateTimeImmutable('1month ago'))
            ->setUpdatedAt(new DateTimeImmutable('1 week ago'))
            ;
        $manager->persist($post);
        };
        $manager->flush();
    }
}
