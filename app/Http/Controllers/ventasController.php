<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use App\Models\venta;
use App\Models\propiedad;
use LDAP\Result;

// use Illuminate\Database\DBAL\TimestampType;

class ventasController extends Controller
{
    //
    public function facturar(Request $request , $id){
        $productos = producto::where('codigoProducto', $id)->first();
        $nvaventa = new venta();
        $nvaventa->fechaVenta = date("d-m-Y");
        $nvaventa->codigoProducto = $productos->codigoProducto;
        $nvaventa->cantidad = $request->input('cantidad');
        $nvaventa->subtotal = ($nvaventa->cantidad * $productos->precio);
        $nvaventa->isv = ($nvaventa->subtotal*0.15);
        $nvaventa->total = ($nvaventa->subtotal + $nvaventa->isv);
        $nvaventa->save();

        return redirect("/principal/2");

        // echo '<pre>';
        // var_dump($nvaventa);
        // echo '</pre>';
        // echo $nvaventa->cantidad;
        // echo $nvaventa->subtotal;
    }

    public function ventas(){
        $ventas = venta::all();
        return view('verVentas', compact('ventas'));
    }

}
