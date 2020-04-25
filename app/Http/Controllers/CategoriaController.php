<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categoria; //importar el modelo Categoria

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lista de categorias
        $dato = "Lista de Productos desde Index";
        $categorias = Categoria::paginate(3);
        //return $categorias = DB::select("select * from categorias where id = ?", [2]);

        //return view("admin.categoria.listar", ["dato" => $dato]);
        //return view("admin.categoria.listar")->with("dato", $dato);
        return view("admin.categoria.listar", compact("dato", "categorias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Cargar un formulario de categoria
        return view("admin.categoria.nuevo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required|min:3|max:30|unique:categorias",
            
        ]);

        //Guardar la informacion de la categoria
        //return $request;
        $c1 = new Categoria;
        $c1->nombre = $request->nombre;
        $c1->descripcion = $request->descripcion;
        $c1->save(); //guardamos la información

        return redirect("/categoria")->with("ok", "La categoria se ha registrado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar la informacion de una categoria
        $categoria = Categoria::find($id);
        return view("admin.categoria.mostrar", compact("categoria"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Cargar un formulario con datos de un recurso
        $categoria = Categoria::find($id);
        return view("admin.categoria.editar", compact("categoria"));
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
        $request->validate([
            "nombre" => "required|min:3|max:30",            
        ]);

        //Modificar los datos en la base de datos
        //return $request;
        $c = Categoria::find($id);
        $c->nombre = $request->nombre;
        $c->descripcion = $request->descripcion;
        $c->save();

        return redirect("/categoria")->with("ok", "La categoria se ha modificado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar un recurso de categoria
        $c = Categoria::find($id);
        $c->delete();
        return redirect("/categoria")->with('ok', "La categoria se ha eliminado");
    }
}
