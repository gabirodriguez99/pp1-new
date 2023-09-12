<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdenController extends AbstractController
{
    /**
     * @Route("/orden/agregar", name="agregar_producto")
     */
    public function agregarProducto(): Response
    {

        // Mensaje Flash (No anda)
        $this->addFlash('notice','Se ingresaron a la orden unidades del producto');
        
        // Redirigir a la ruta lista_productos.
        return $this->redirectToRoute('listar_productos');

    }
}

