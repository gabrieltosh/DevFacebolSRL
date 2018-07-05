<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use App\Pais;
use Exception;
use Session;
use App\Http\Requests\RequestCiudadCreate;
use App\Http\Requests\RequestCiudadUpdate;
use Alert;
class controladorCiudad extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');        
    }
    public function index()
    {
        $ciudades=Ciudad::orderBy('id','desc')->get();
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.ciudades.index',compact('ciudades'));
    }
    public function create()
    {
       $paises = Pais::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.ciudades.create', compact('paises'));
    }
    public function store(RequestCiudadCreate $request)
    {
       Ciudad::create(
          [
            'nombre'=>$request->nombre,
            'pais_id'=>$request->pais_id,
          ]

       );
        Alert::success('Exito!!','El registro fue realizado exitosamente');

       return redirect()->route('ciudades.index');
    }
    public function edit($id)
    {
        $paises = Pais::orderBy('id','desc')->pluck('nombre','id');        
        $ciudad=Ciudad::Find($id);
        return view('panel.ciudades.edit',compact('ciudad','paises'));

    }
    public function update(RequestCiudadUpdate $request, $id)
    {
        $ciudad= Ciudad::find($id);
        $ciudad->fill(
            [
               'nombre'=>$request->nombre,
                'pais_id'=>$request->pais_id,       
            ]
        );
         $ciudad->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');

        return redirect()->route('ciudades.index'); 
    }
    public function destroy($id)
    {
        try{
            $ciudad= Ciudad::find($id);
            $ciudad->delete();
            Alert::success('Exito!!','El registro se elimino correctamente');
            return redirect()->route('ciudades.index');
        }catch(Exception $e)
        {
             Alert::error('Ups!!!', 'No se puede borrar el registro, ya que esta en uso')->showConfirmButton('Ok',' #5bc0de');;
            return redirect()->route('ciudades.index');
        }
    }
}
