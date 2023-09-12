<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdenController extends AbstractController
{
    /**
     * @Route("/orden/agregar", name="agregar_producto", methods={"POST"})
     */
    public function agregarProducto(Request $request): Response
    {
        $idProducto = $request->request->get('idproducto');
        $cantidad = $request->request->get('cantidad');

        $mensaje = sprintf("Se ingresaron a la orden %d unidades del producto %d", $cantidad, $idProducto);
        $this->addFlash('success', $mensaje);
        
        // Redirigir a la ruta lista_productos.
        return $this->redirectToRoute('listar_productos');

    }
}

