<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/BlogFixtures.php

namespace Izze\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Izze\UserBundle\Entity\User;
use Izze\UserBundle\Entity\Role;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UserFixtures implements FixtureInterface, ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $role = new Role();
        $role->setName("COMMON USER");
        $role->setRole("ROLE_USER");
        $manager->persist($role);

        $user = new User();

        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($user)
        ;

        $user->setUsername("jozecarlos");
        $user->setPassword($encoder->encodePassword('123456', $user->getSalt()));
        $user->setEmail("o.grande.ze@gmail.com");
        $user->addRole($role);

        $manager->persist($user);
        $manager->flush();
    }

}