<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function obtenerProductos()
    {
        return self::where('activo',true)->get();
    }

    public static function guardarDatos($params)
    {
        $producto = new Producto;

        if (isset($params['id']) && $params['id'] != null){
            $producto=self::where('id',$params['id'])->first();
        }

        $producto->sku =$params['sku'];
        $producto->precio_dolares =$params['precio_dolares'];
        $producto->precio_pesos =$params['precio_pesos'];
        $producto->puntos =$params['puntos'];
        $producto->activo = true;

        $producto->save();

        ProductoTraducciones::guardarEspaniol($params, $producto->id);
        ProductoTraducciones::guardarIngles($params, $producto->id);
    }

    public static function obtenerProductoPorID($id)
    {
        $producto = self::where('id',$id)->first();
        $espaniol = ProductoTraducciones::obtenerDatosEspaniol($id);
        $ingles = ProductoTraducciones::obtenerDatosIngles($id);

        $datos = [
            "id" => $producto->id,
            "idEs" => $espaniol->id,
            "nombreEs" => $espaniol->nombre,
            "descripcionCortaEs" => $espaniol->descripcion_corta,
            "descripcionLargaEs" => $espaniol->descripcion_larga,
            "urleEs" => $espaniol->url,
            "idEn" => $ingles->id,
            "nombreEn" => $ingles->nombre,
            "descripcionCortaEn" => $ingles->descripcion_corta,
            "descripcionLargaEn" => $ingles->descripcion_larga,
            "urleEn" => $ingles->url,
            "sku" => $producto->sku,
            "precio_dolares" => $producto->precio_dolares,
            "precio_pesos" => $producto->precio_pesos,
            "puntos" => $producto->puntos
        ];

        return $datos;
    }
}
