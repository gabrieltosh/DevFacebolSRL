<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Institucion extends Model
    {
    protected $table="institucions";
    protected $fillable=[
      'qSomos',
      'frase1',
      'frase2',
      'frase3',
      'trabaja',
      'direccion',
      'celular',
      'telefono',
      'email',
      'facebook',
      'twitter',
      'youtube',
      'instagram',
      'google',
      'imagen',
      'vision',
      'mision',
      'desEmpresa',
      'banner1',
      'banner2',
      'banner3',
      'titulonoticias',
      'desnoticias',
      'tituloactividades',
      'desactividades',
      'imgtrabaja',
      'titulosomos',
      'titulosuscribir',
      'dessuscribir',
      'titulotrabaja',
      'tituloplan',
      'desplan',
      'nombreplan',
      'bsprecio',
      'susprecio',
      'plan',
      'benplan1',
      'benplan2',
      'benplan3',
      'benplan4',
      'benplan5',
      'tituloequipo',
      'desequipo',
      'tituloempresa',
      'visitas'
    ];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('institucion')->put($name, \File::get($imagen));
        }
    }
     public function setBanner1Attribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['banner1'] = $name;
              \Storage::disk('institucion')->put($name, \File::get($imagen));
        }
    }
    public function setBanner2Attribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['banner2'] = $name;
              \Storage::disk('institucion')->put($name, \File::get($imagen));
        }
    }
    public function setBanner3Attribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['banner3'] = $name;
              \Storage::disk('institucion')->put($name, \File::get($imagen));
        }
    }
}
