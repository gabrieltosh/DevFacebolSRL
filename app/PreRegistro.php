<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class PreRegistro extends Model
{
    protected $table="pre_registros";
    protected $fillable=[
        'nombre','apellido','email','celular','imagen','activo'
    ];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
}
