<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Ciudad;
use App\Categoria;
use App\User;
use Session;
use Alert;
use App\Http\Requests\RequestEmpresaCreate;
use App\Http\Requests\RequestEmpresaUpdate;
class controllerEmpresa extends Controller
{
	public function __construct()
    {
		$this->middleware('panel');
		$this->middleware('admin');		
	}
    public function index(){
		$empresas = Empresa::orderBy('id','desc')->get();
		Session::flash('message','Datos Cargados Correctamente');
    	return view('panel.empresas.index',compact('empresas'));

    }
    public function create(){

      $usuarios = User::where('tipo','Empresa')->orderBy('id','desc')->pluck('cod_face','id');
      $categorias = Categoria::orderBy('id','desc')->pluck('nombre','id');
    	$ciudades = Ciudad::orderBy('id','desc')->pluck('nombre','id');
    	return view('panel.empresas.create', compact('ciudades','usuarios','categorias'));

	}
	public function show($id)
	{
		$empresa=Empresa::find($id);
		if($empresa->activo==1)
		{
			$empresa->fill([
				'activo'=>0,
			]);
			$empresa->save();
		}else{
			$empresa->fill([
				'activo'=>1,
			]);
			$empresa->save();
		}
		return redirect()->route('empresas.index');
	}

	public function store(RequestEmpresaCreate $request)
	{
			Empresa::create([
				'nombre'=>$request->nombre,
				'descripcion'=>$request->descripcion,
				'telefono'=>$request->telefono,
				'email'=>$request->email,
				'facebook'=>$request->facebook,
		 		'direccion'=>$request->direccion,
		 		'promocion'=>$request->promocion,
		 		'descuento'=>$request->descuento,
		 		'horario'=>$request->horario,
		 		'activo'=>1,
				'web'=>$request->web,
		 		'categoria_id'=>$request->categoria_id,
				'imagen'=>$request->imagen,
				'cod_face'=>$request->cod_face,
		 		'usuario_id'=>$request->usuario_id,
				'ciudad_id'=>$request->ciudad_id,
				'video'=>$request->video
			]);
			return redirect()->route('empresas.index');
            Alert::success('Exito!!','El registro fue realizado exitosamente');
   	}
   	public function edit($id){

      $usuarios = User::where('tipo','Empresa')->orderBy('id','desc')->pluck('cod_face','id');
     
      $categorias = Categoria::orderBy('id','desc')->pluck('nombre','id');
   		$ciudades = Ciudad::orderBy('id','desc')->pluck('nombre','id');
   		$empresa = Empresa::find($id);
   		return view('panel.empresas.edit',compact('empresa','ciudades','categorias','usuarios'));

   	}

   	public function update(RequestEmpresaUpdate $request, $id){
		$empresa = Empresa::find($id);
		
			$empresa->fill([
				'nombre'=>$request->nombre,
				'descripcion'=>$request->descripcion,
				'telefono'=>$request->telefono,
				'email'=>$request->email,
				'facebook'=>$request->facebook,
				'direccion'=>$request->direccion,
				'promocion'=>$request->promocion,
				'descuento'=>$request->descuento,
				'horario'=>$request->horario,
				'web'=>$request->web,
				'cod_face'=>$request->cod_face,
				'categoria_id'=>$request->categoria_id,
				'imagen'=>$request->imagen,
				'usuario_id'=>$request->usuario_id,
				'ciudad_id'=>$request->ciudad_id,
				'video'=>$request->video
			]);
			$empresa->save();
			Alert::success('Exito!!','El registro fue editado exitosamente');		
		    return redirect()->route('empresas.index');
		
   	} 
   	public function destroy($id)
   	{
   		$empresa=Empresa::find($id)->delete();
		Alert::success('Exito!!','El registro fue eliminado exitosamente');		
   		return redirect()->route('empresas.index');
   	}
}
