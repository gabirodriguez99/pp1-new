<?php
namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Producto;

class ProductoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // creamos 10 productos
        for ($i = 1; $i < 11; $i++) {
        $producto = new Producto();
        $producto->setNombre("product $i");
        $producto->setPrecio(mt_rand(10, 100));
        $producto->setDescripcion('Lorem ipsum fede');
        $producto->setImagen("images/producto$i.jpg");
        $manager->persist($producto);
        }
        $manager->flush();
    }
}