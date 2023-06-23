<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductoController extends Controller
{
    public function index(): View
    {
        $productos = \App\Models\Producto::obtenerProductos();
        return view('producto.producto', ['productos' => $productos]);
    }

    public function crear(): View
    {
        return view('producto.FormularioProducto');
    }
    public function editar($id): View
    {

        $producto = Producto::obtenerProductoPorID($id);
        return view('producto.EditarProducto', ['producto' => $producto]);
    }

    public function detalle($id): View
    {
        $producto = Producto::obtenerProductoPorID($id);
        return view('producto.DetalleProducto', ['producto' => $producto]);
    }

    public function guardar(Request $request)
    {
        $this->validate($request, [
            "nombreEs" => 'required',
            "descripcionCortaEs" => 'required',
            "descripcionLargaEs" => 'required',
            "urleEs" => 'required',
            "nombreEn" => 'required',
            "descripcionCortaEn" => 'required',
            "descripcionLargaEn" => 'required',
            "urleEn" => 'required',
            "sku" => 'required',
            "precio_dolares" => 'required',
            "precio_pesos" => 'required',
            "puntos" => 'required',
        ]);

        Producto::guardarDatos($request->all());
        return redirect('/admin/producto');
    }

    public function modificar(Request $request)
    {
        $this->validate($request, [
            "nombreEs" => 'required',
            "descripcionCortaEs" => 'required',
            "descripcionLargaEs" => 'required',
            "urleEs" => 'required',
            "nombreEn" => 'required',
            "descripcionCortaEn" => 'required',
            "descripcionLargaEn" => 'required',
            "urleEn" => 'required',
            "sku" => 'required',
            "precio_dolares" => 'required',
            "precio_pesos" => 'required',
            "puntos" => 'required',
        ]);

        Producto::guardarDatos($request->all());
        return redirect('/admin/producto');
    }

    public function eliminar(Request $request)
    {
        $parametros = $request->all();

        Producto::where('id',$parametros['id'])->update(['activo'=> false]);
        return json_encode([]);
    }

    public function productos(Request $request)
    {
        $productos = \App\Models\Producto::obtenerProductos();
        return view('producto.productos', ['productos' => $productos]);
    }

    public function cambio(Request $request)
    {
        $params = $request->all();

        $client = new Client(['verify' => false,]);
        $response = $client->request(
            'GET',
            'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43718/datos/oportuno?token=e9f07a50f01595b783294aa90616d0603e5db7095535e5d5ccb704f2e805c465',
            ['header' => ['bmx-token' => 'e9f07a50f01595b783294aa90616d0603e5db7095535e5d5ccb704f2e805c465']]);

        $respuesta = json_decode($response->getBody()->getContents());

        $cantidadCambio = $respuesta->bmx->series[0]->datos[0]->dato;
        return $params['cantidad'] * $cantidadCambio;
    }
}
