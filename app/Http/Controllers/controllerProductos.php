<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Empresa;
use Session;
class controllerProductos extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');        
    }
	public function index()
	{
		$producto = Producto::orderBy('id','desc')->paginate('5');
		Session::flash('message','Datos Cargados Correctamente');
		return view('panel.productos.index',compact('producto'));
	}
	public function create(){

		$tipo = ['Normal','Servicio'];
		return view('panel.productos.create',compact('tipo'));

	}

	public function store(Request $request){

		Producto::create([
			'empresa_id'=>1,
			'nombre'=>$request->nombre,
			'descripcion'=>$request->descripcion,
			'precio'=>$request->precio,
			'descuento'=>$request->descuento,
			'comision'=>$request->comision,
			'tipo'=>$request->tipo,
			'imagen'=>$request->imagen
		]);
		return redirect()->route('productos.index');

	}

	public function edit($id){

		$producto = Producto::find($id);
		$tipo = ['Normal','Servicio'];
		return view('panel.productos.edit',compact('producto','tipo'));

	}	

	public function update(Request $request,$id){

		$producto = Producto::find($id);
		$producto->fill([
			'empresa_id'=>1,
			'nombre'=>$request->nombre,
			'descripcion'=>$request->descripcion,
			'precio'=>$request->precio,
			'descuento'=>$request->descuento,
			'comision'=>$request->comision,
			'tipo'=>$request->tipo,
			'imagen'=>$request->imagen
		]);
		$producto->save();
		return redirect()->route('productos.index');
	}	
}
