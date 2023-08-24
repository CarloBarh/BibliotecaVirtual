<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //pagina de inicio
        $busqueda = $request->busqueda;
        $datos = Prestamo::where('id','LIKE',$busqueda.'%')
                    //->orWhere('nombre','LIKE',$busqueda.'%')
                    ->orderBy('id')
                    ->paginate(10);
                    $info = [
                        'datos'=>$datos,
                        'busqueda'=>$busqueda,
                    ];            
        return view('inicioprestamo',$info);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $libros = Libro::all();
        $usuarios = Usuario::all();
        
        return view('agregarprestamo', compact('libros', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sirve para guardar datos en la base de datos
        $personas = new Prestamo();
        $personas->fecha_solicitud = $request->post('fecha_solicitud');
        $personas->fecha_prestamo = $request->post('fecha_prestamo');
        $personas->fecha_devolución = $request->post('fecha_devolución');
        $personas->libro_id = $request->post('libro_id');
        $personas->usuario_id = $request->post('usuario_id');
        $personas->save();

        return redirect()->route("prestamo.index")->with("success", "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $libros = Libro::all();
        $usuarios = Usuario::all();
        $personas = Prestamo::find($id);
        return view('eliminarprestamo', compact('personas','libros','usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //este metodo sirve para traer datos que se van a editar
        $libros = Libro::all();
        $usuarios = Usuario::all();
        $personas = Prestamo::find($id);
        return view('actualizarprestamo', compact('personas','libros', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //actualiza los datos en la db
        $personas = Prestamo::find($id);
        $personas->fecha_solicitud = $request->post('fecha_solicitud');
        $personas->fecha_prestamo = $request->post('fecha_prestamo');
        $personas->fecha_devolución = $request->post('fecha_devolución');
        $personas->libro_id = $request->post('libro_id');
        $personas->usuario_id = $request->post('usuario_id');
        $personas->save();

        return redirect()->route("prestamo.index")->with("success", "Actualizado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //elimina un registro
        $personas = Prestamo::find($id);
        $personas->delete();
        return redirect()->route("prestamo.index")->with("success", "Eliminado con exito!");

    }
}
