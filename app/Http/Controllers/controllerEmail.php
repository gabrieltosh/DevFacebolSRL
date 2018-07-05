<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use Session;
use Alert;
use Exception;
use App\Http\Requests\RequestEmailUpdate;
class controllerEmail extends Controller
{
	   public function __construct()
    {
  		$this->middleware('panel');
  		$this->middleware('admin');
    }
    public function index(){
  
  		$emails = Email::orderBy('id','desc')->get();
  		Session::flash('message','Datos Cargados Correctamente');
    	return view('panel.emails.index',compact('emails'));

    }
    public function create(){

    	return view('panel.emails.create');
    }
   	public function store(Request $request){

   		Email::create([
   			'email'=>$request->email,
   		]);
      Alert::success('Exito!!','El registro fue realizado exitosamente');
   		return redirect()->route('email.index');

   	}

   	public function edit($id){

   		$email = Email::find($id);
   		return view('panel.emails.edit',compact('email'));

   	}

   	public function update(RequestEmailUpdate $request, $id)
    {

  		$email = Email::find($id);
     		$email->fill([
     			'email'=>$request->email,
  		   ]);
  		$email->save();
        Alert::success('Exito!!','El registro fue realizado exitosamente');
     		return redirect()->route('email.index');
	   } 
	public function destroy($id)
	{
		$email =Email::find($id);
		$email->delete();
		Alert::success('Exito!!','El registro se elimino correctamente');
		return redirect()->route('email.index');
	}
}
