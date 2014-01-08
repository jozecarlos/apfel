<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/BlogFixtures.php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Izze\UserBundle\Entity\User;
use Izze\UserBundle\Entity\Role;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

         $role = new Role();
         $role->setName("COMMON USER");
         $role->setRole("ROLE_USER");
         $manager->persist($role);

        $factory = $this->get('security.encoder_factory');
        $user = new User();
        $encoder = $factory->getEncoder($user);

        $user->setUsername("jozecarlos");
        $user->setPassword($encoder->encodePassword('123456', $user->getSalt()));
        $user->setEmail("o.grande.ze@gmail.com");
        $user->setRoles($user->getRoles());

        $manager->persist($user);

        

        $manager->flush();
    }

}