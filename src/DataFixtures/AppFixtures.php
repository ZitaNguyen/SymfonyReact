<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\BlogPost;

class AppFixtures extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $blogPost = new BlogPost();
        $blogPost->setTitle('A first post!');
        $blogPost->setPublished(new \DateTime('2020-10-21'));
        $blogPost->setContent('Post text!');
        $blogPost->setAuthor('Zita Van');
        $blogPost->setSlug('a-first-post');

        $manager->persist($blogPost);

        $blogPost = new BlogPost();
        $blogPost->setTitle('A second post!');
        $blogPost->setPublished(new \DateTime('2020-10-23'));
        $blogPost->setContent('Post text!');
        $blogPost->setAuthor('Nam Nguyen');
        $blogPost->setSlug('a-second-post');

        $manager->persist($blogPost);

        $manager->flush();
    }
}
