<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Producto;
use App\Negocio\Almacen;

class ProductoController extends AbstractController{

/**  @Route("/", name="listar_productos")*/
public function listarProductos(ManagerRegistry $doctrine): Response
{
    $repositorio = $doctrine->getRepository(Producto::class);
    $productos = $repositorio->findAll();

    if (!$productos) {
        throw $this->createNotFoundException('No existe');
    }  

    return $this->render('producto/lista.html.twig', ['productos' => $productos]);
}

/** @Route("/{id}", name="detalle_producto") */
public function detalleProducto($id, Producto $almacen, ManagerRegistry $doctrine): Response
{
    //$productos = $almacen->find($id);
    //return $this->render('producto/detalle.html.twig', ['productos' => $productos,]);
    $repositorio = $doctrine->getRepository(Producto::class);
    $productos = $repositorio->find($id);
    return $this->render('producto/detalle.html.twig', ['productos' => $productos]);
}

/**
 * @Route("/product/{id}", name="product_show")
 */
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $repositorio = $doctrine->getRepository(Product::class);
        $product = $repositorio->find($id);
        if (!$product) 
        {
            throw $this->createNotFoundException('No existe');
        }
    }
}







