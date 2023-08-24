<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //pagina de inicio
        $busqueda = $request->busqueda;
        $datos = Libro::where('título','LIKE',$busqueda.'%')
                    ->orWhere('autor','LIKE',$busqueda.'%')
                    ->orderBy('id')
                    ->paginate(10);
                    $info = [
                        'datos'=>$datos,
                        'busqueda'=>$busqueda,
                    ];            
        return view('iniciolibro',$info);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //el formulario donde agregamos datos
        return view('agregarlibro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sirve para guardar datos en la base de datos
        $personas = new Libro();
        $personas->título = $request->post('título');
        $personas->autor = $request->post('autor');
        $personas->editorial = $request->post('editorial');
        $personas->año_publicación = $request->post('año_publicación');
        $personas->cantidad_disponible = $request->post('cantidad_disponible');
        $personas->save();

        return redirect()->route("libro.index")->with("success", "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $personas = Libro::find($id);
        return view('eliminarlibro', compact('personas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //este metodo sirve para traer datos que se van a editar
        $personas = Libro::find($id);
        return view('actualizarlibro', compact('personas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //actualiza los datos en la db
        $personas = Libro::find($id);
        $personas->título = $request->post('título');
        $personas->autor = $request->post('autor');
        $personas->editorial = $request->post('editorial');
        $personas->año_publicación = $request->post('año_publicación');
        $personas->cantidad_disponible = $request->post('cantidad_disponible');
        $personas->save();

        return redirect()->route("libro.index")->with("success", "Actualizado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //elimina un registro
        $personas = Libro::find($id);
        $personas->delete();
        return redirect()->route("libro.index")->with("success", "Eliminado con exito!");

    }
}
