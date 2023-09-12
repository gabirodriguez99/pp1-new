<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // creamos 5 usuarios
        for ($i = 0; $i < 5; $i++) {
        $usuario = new User();
        $usuario->setNombre('Usuario'.$i);
        $usuario->setEmail('usuario'.$i.'@gmail.com');
        $usuario->setPassword('$2y$13$E82q/eWtT56gX66Ebe9HFuVxjIToS8Zd0rPJOq9Y.rTJjy5bZJ9k.');

        $manager->persist($usuario);
        }
        $manager->flush();
    }
}
