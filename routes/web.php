<?php
// pagina principal
Route::post('codigo/{ci}','controllerInicio@codigoUsuario')->name('codigoUsuario');
Route::post('registrar/{codigo}','controllerInicio@crearUsuario')->name('crearUsuario');
Route::get('registro/{codigo}','controllerInicio@registroUsuario')->name('registroUsuario');
Route::get('empresa/{id}','controllerInicio@detalleEmpresa')->name('detalleEmpresa');
Route::get('noticia','controllerInicio@noticia')->name('noticia');
Route::post('preregistro','controllerInicio@preRegistro')->name('preregistro');
Route::get('equipo','controllerInicio@equipo')->name('equipo');
Route::get('empresa','controllerInicio@empresa')->name('empresa');
Route::get('ciudad/{id}','controllerInicio@ciudad')->name('ciudad');
Route::get('categoria/{id}','controllerInicio@categoria')->name('categoria');
Route::get('actividad','controllerInicio@actividad')->name('actividad');
Route::get('contacto','controllerInicio@contactanos')->name('contactanos');
Route::get('/','controllerInicio@inicio')->name('inicio');
//envio de emails de la pagina principal
Route::post('suscribir','controllerInicio@suscribir')->name('suscribir');
Route::post('email_post','controllerInicio@emailPost')->name('email_post');

//login
Route::post('log','controllerLogin@log')->name('log');
Route::get('logout','controllerLogin@logout')->name('logout');
Route::post('reset/password/save','controllerInicio@passwordSave')->name('passwordSave');
Route::get('reset/password/{codigo}','controllerInicio@passwordReset')->name('passwordReset');
Route::post('reset','controllerInicio@emailReset')->name('reset');

Route::get('panel/reset/{codigo}','controllerInicio@passwordReset')->name('passwordReset');
//panel de planes
Route::resource('panel/planes','controllerPlanes');
//panel de preregistro
Route::resource('panel/preregistro','controllerPreRegistro');
//panel de categoria
Route::resource('panel/categorias','controllerCategoria');
//pandel de equipo
Route::resource('panel/equipos','controladorEquipo');
//panel de actividad
Route::resource('panel/noticias','controllerNoticias');

Route::resource('panel/actividades','controladorActividades');
//pandel de ciudad
Route::resource('panel/ciudades','controladorCiudad');
//panel de pais
Route::resource('panel/pais','controladorPais');
//panel de productos
Route::resource('panel/productos','controllerProductos');
//panel de empresas 
Route::resource('panel/empresas','controllerEmpresa');
//panel de emails subscritos
Route::resource('panel/email','controllerEmail');
//panel de usuarios
Route::resource('panel/administradores','controllerAdmin');

Route::resource('panel/usuarios/empresa','controllerUsuEmpre');

Route::resource('panel/usuarios','controllerUsuario');
//panel administracion de datos de pagina web
Route::post('panel/institucion/datos/{tag}','controllerInstitucion@updateDatos')->name('updateDatos');
Route::post('panel/institucion/imagen/{tag}','controllerInstitucion@updateImagen')->name('updateImagen');
Route::resource('panel/institucion','controllerInstitucion');
//ppanel de adinistracion
Route::get('panel','controllerPanel@startAdmin')->name('start-a');

