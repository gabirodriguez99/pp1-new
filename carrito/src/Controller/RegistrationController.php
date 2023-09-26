<?php

// src/Controller/RegistrationController.php
namespace App\Controller;
// ...
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
 public function index(UserPasswordHasherInterface $passwordHasher)
 {
 // ... e.g. get the user data from a registration form
 $user = new User();
 $plaintextPassword = 'mi_clave';
 // hash the password (based on the security.yaml config)
 $hashedPassword = $passwordHasher->hashPassword(
 $user,
 $plaintextPassword
 );
 $user->setPassword($hashedPassword);
 // ...
 }
}