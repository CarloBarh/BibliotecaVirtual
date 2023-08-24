<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        //pagina de inicio
        $busqueda = $request->busqueda;
        $datos = Usuario::where('nombre','LIKE',$busqueda.'%')
                    ->orderBy('id')
                    ->paginate(10);
        $info = [
            'datos'=>$datos,
            'busqueda'=>$busqueda,
        ];            
        return view('inicio',$info);
    }

    
    public function create()
    {
        //el formulario donde agregamos datos
        return view('agregar');
    }

    
    public function store(Request $request)
    {
        //sirve para guardar datos en la base de datos
        $personas = new Usuario();
        $personas->nombre = $request->post('nombre');
        $personas->correo_electronico = $request->post('correo_electronico');
        $personas->teléfono = $request->post('teléfono');
        $personas->dirección = $request->post('dirección');
        $personas->save();

        return redirect()->route("usuario.index")->with("success", "Agregado con exito!");
    }

   
    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $personas = Usuario::find($id);
        return view('eliminar', compact('personas'));
    }

    
    public function edit($id)
    {
        //este metodo sirve para traer datos que se van a editar
        $personas = Usuario::find($id);
        return view('actualizar', compact('personas'));
    }

    
    public function update(Request $request, $id)
    {
        //actualiza los datos en la db
        $personas = Usuario::find($id);
        $personas->nombre = $request->post('nombre');
        $personas->correo_electronico = $request->post('correo_electronico');
        $personas->teléfono = $request->post('teléfono');
        $personas->dirección = $request->post('dirección');
        $personas->save();

        return redirect()->route("usuario.index")->with("success", "Actualizado con exito!");
    }

    
    public function destroy($id)
    {
        //elimina un registro
        $personas = Usuario::find($id);
        $personas->delete();
        return redirect()->route("usuario.index")->with("success", "Eliminado con exito!");

    }

    
}
