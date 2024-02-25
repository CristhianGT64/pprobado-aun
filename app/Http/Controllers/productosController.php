<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;


class productosController extends Controller
{
    //
    public function index($id = 0){
        return view('index', compact('id'));
    }

    public function NuevoProducto(){
        return view('nuevoProducto');
    }

    public function store(Request $request){
        $nvaproducto = new producto();
        $nvaproducto->codigoProducto =  $request->input('ID');
        $nvaproducto->nombre = $request->input('nombre');
        $nvaproducto->precio = $request->input('precio');
        $nvaproducto->stock = $request->input('stock');
        $nvaproducto->save();
        return redirect("/principal/1");
    }

    public function VerProductos(){
        $productos = producto::all();
        return view('verProductos', compact('productos'));
    }

    public function ventas(){
        $productos = producto::all();
        return view('vender', compact('productos'));
    }

    public function buscar(request $request){
        $productoBusqueda = $request->input('productoBusqueda');
        
        $productos = producto::where('nombre', 'LIKE', "%$productoBusqueda%")->paginate(10);

        return view('verProductos', compact('productos'));
    }


}
