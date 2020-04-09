<?php

// aprendible.com = Route ::get('/', function)
// aprendible.com = Route ::get('contacto', function)

//Route ::get('/', function(){
//	return "Hola dese la pagina";
//});

//Route ::get('contacto', function(){
//	return "Hola dese la pagina contacto";
//});

//Route ::get()
//Route ::post() // form action= "POST"
//Route ::put()
//---------- VAR NOMBRE----------------------
//Route ::get('saludo/{nombre?}', function($nombre = 'Invitado'){
//	return "Saludos " . $nombre;
//});
Route ::get('/', function(){
	$nombre = "Gaston";
	return view('home') => with('nombre', $nombre);
});
