<?php

namespace App\DataFixtures;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

use App\Entity\Category;
use App\Entity\Post;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Bluemmb;
use Faker\Core\Color;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppFixtures extends Fixture
{

  
    public function __construct (
        private SluggerInterface $slugger,
        private UserPasswordHasherInterface $userPasswordHasherInterface
        ) 
    {
    }

    public function load(ObjectManager $manager) : void
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

           
        for($i=0;$i<6;$i++){
            $user = new User;
            $user->setPassword(
                $this->userPasswordHasherInterface->hashPassword(
                    $user, "coucou"
                )
            );
            $user->setEmail($faker->email);
            $user->setFirstname($faker->name);
            $manager->persist($user);
            $category = new Category();
            $category->setName($faker->sentence(3));
            $category->setDescription($faker->sentence(10)); 
            $manager->persist($category);   
            for($j=0;$j<10;$j++){
                $post = new Post;
                $post->setTitle($faker->sentence(8));
                $post->setContent($faker->text());
                $post->setUser($user);
                $post->setImage($faker->imageUrl(600,400,true));
                $post->addCategory($category);
                $post->setPublishedDate($faker->dateTime());
                $manager->persist($post);
            }
        }
      

        
        $manager->flush();
    }
}
