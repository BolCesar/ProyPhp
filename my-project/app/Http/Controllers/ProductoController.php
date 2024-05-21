<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    public function index()
    {
        $productos=Producto::orderBy('id', 'desc')->paginate(5);
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $p=new Producto();
        $p->nombre="Producto";
        $p->descripcion="descripcion";
        $p->precio=1.1;
        $p->disponible=true;

        $p->save();
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $p=new Producto();
        $p->nombre=$request->nombre;
        $p->descripcion=$request->descripcion;
        $p->precio=$request->precio;
        $p->moneda=$request->moneda;
        $p->disponible=$request->disponible=="on"?1:0;

        $p->save();
        return redirect()->route("productos.show", $p->id);
    }

    public function show(Producto $producto){
        return view('productos.show', compact('producto'));
    }
    public function edit( Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }


    public function update(Request $request, Producto $producto){
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->moneda = $request->moneda;
        $producto->disponible = $request->disponible=="on"?1:0;

        $producto->save();

        return redirect()->route("productos.show", $producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
