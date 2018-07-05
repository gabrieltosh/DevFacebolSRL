<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Auth;
use Alert;
use Session;
use Exception;
use App\Http\Requests\RequestCategoriaCreate;
use App\Http\Requests\RequestCategoriaUpdate;
class controllerCategoria extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');        
    }
    public function index()
    {
        $categorias=Categoria::orderBy('id','desc')->get();
       Session::flash('message','Datos Cargados Correctamente');
        return view('panel.categorias.index',compact('categorias'));
    }
    public function create()
    {
        return view('panel.categorias.create');
    }

    public function store(RequestCategoriaCreate  $request)
    {
        Categoria::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
        ]);
        Alert::success('Exito!!','El registro fue realizado exitosamente');
        return redirect()->route('categorias.index');
    }

    public function edit($id)
    {
        $categoria=Categoria::find($id);
        return view('panel.categorias.edit',compact('categoria'));
    }

    public function update(RequestCategoriaUpdate  $request, $id)
    {
        $categoria= Categoria::find($id);
        $categoria->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
        ]);
        $categoria->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        try{
            $categoria= Categoria::find($id);
            $categoria->delete();
            Alert::success('Exito!!','El registro se elimino correctamente');
            return redirect()->route('categorias.index');

        }catch(Exception $e)
        {
            Alert::error('Ups!!!', 'No se puede borrar el registro, ya que esta en uso')->showConfirmButton('Ok',' #5bc0de');
            return redirect()->route('categorias.index');
        }
      
    }
}
