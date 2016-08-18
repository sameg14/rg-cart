<?php

namespace ApiBundle\Controller;

use ApiBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    public function createAction(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');

        $registry = $this->get('doctrine');
        $manager = $registry->getManager();

        $user = new User();
        $user->setFirstName($name);
        $user->setEmail($email);
        $user->setPassword($password);
        $manager->persist($user);

        $manager->flush();


        die('flushed!');
    }

}
