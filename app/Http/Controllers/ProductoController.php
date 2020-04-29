<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Proveedor;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(10);
        return view("admin.producto.listar", compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::All();
        $proveedores = Proveedor::All();
        
        return view("admin.producto.nuevo", compact('categorias', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Producto;
        $p->nombre = $request->nombre;
        $p->cantidad = $request->cantidad;
        $p->precio = $request->precio;
        $p->descripcion = $request->descripcion;
        $p->categoria_id = $request->categoria_id;
        $p->proveedor_id = $request->proveedor_id;

        $nombre_imagen = '-';
        if($file = $request->file('imagen')){
            //obtenemos el nombre del archivo
             $nombre_imagen = $file->getClientOriginalName();
             $file->move('imagenes', $nombre_imagen); 
        }
        
        $p->imagen = "imagenes/".$nombre_imagen;
        $p->save();

        return redirect("/producto");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
