<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actividad;
use Session;
use App\Http\Requests\RequestActividadCreate;
use App\Http\Requests\RequestActividadUpdate;
use Alert;
class controladorActividades extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');        
    }
    public function index()
    {
        $actividades = Actividad::where('tipo','actividad')->orderBy('id','desc')->get();
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.actividades.index',compact('actividades'));
    }
    public function create()
    {
        $actividades = Actividad::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.actividades.create', compact('actividades'));
    }

    public function store(RequestActividadCreate $request)
    {
            Actividad::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'tipo'=>$request->tipo,
            'fecha'=>$request->fecha,
            'tipo'=>'actividad',
            'activo'=>1,
        ]);
        Alert::success('Exito!!','El registro fue realizado exitosamente');
        return redirect()->route('actividades.index');
    }
    public function show($id)
    {
        $actividad=Actividad::find($id);
        if($actividad->activo==1)
        {
            $actividad->fill([
                'activo'=>0,
            ]);
            $actividad->save();
            return redirect()->route('actividades.index');
        }else
        {
            $actividad->fill([
                'activo'=>1,
            ]);
            $actividad->save();
            return redirect()->route('actividades.index');
        }
    }
    public function edit($id)
    {
        $actividad= Actividad::find($id);
        
        return view('panel.actividades.edit',compact('actividad'));
    }
    public function update(RequestActividadUpdate $request,$id)
    {
        $actividad= Actividad::find($id);
        $actividad->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'tipo'=>$request->tipo,
            'fecha'=>$request->fecha,
            'tipo'=>'actividad',
            'activo'=>1,
        ]);
        $actividad->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('actividades.index');
    }
    public function destroy($id)
    {   
        $actividad= Actividad::find($id);
        $actividad->delete();
        Alert::success('Exito!!','El registro se elimino correctamente');
        return redirect()->route('actividades.index');

    }
}
