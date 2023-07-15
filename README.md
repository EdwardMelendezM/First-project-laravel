# Aprender LARAVEL

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


- Iniciar el servidor con
```
php artisan server
```


## Conceptos basicos front end
-  Esto incluye el contenido donde se llame - solo se pasa la direccion del archivo
```
@include('layouts._partials.menu')
```

- Esto es para establecer lo que se inyectara - solo se pasa el nombre
```
@yield('title')
@yield('content')
```

- Ejemplo de un componente donde las variables se establecen con $varible
```
<div>
  <h3>{{$title}}</h3>
  <p>
    {{$content}}
  </p>
</div>
```
Aqui se llama al componenten donde ponemos primero la direccion y el valor para cada propiedad
```
@component('_components.card')
  @slot('title',"Servicio numero 1")
  @slot('content')
      Texto que estara dentro como texto
  @endSlot
@endcomponent
```

- Esto es para traer un layout cuando fue creado, damos los nombres de cada variable creada para ser reemplazada. En este ejemplo tenemos title y content

Este es el archivo layout
```
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    {{-- Decimos que espera que inyecte contenido --}}
    @yield('title')
  </title>
</head>
<body>
  @include('layouts._partials.menu')
  @yield('content')
</body>
</html>
```
Aqui reusamos el layout
```
@extends('layouts.layout') //Ubicacion del archivo

@section('title','CasaOnichan')

@section('content')
  <h1>Onichan home</h1>
@endsection 

```

- Este es un ejemplo para poner imagenes estaticas con el doble corchete ' { { } } '
```
<img
  src="{{asset('assets/images/contornos.jpg')}}"
  alt="contornos"
>
```
## Rutas
- Para mostrar rutas estaticas utilzamos Route::view()
```
Route::view('home', 'home')->name('home');
Route::view('about', 'about')->name('about');

```

- Para mostrar rutas dinamicas usamos estos
```
// Route::get()
// Route::post()
// Route::put()
// Route::delete()
// Route::patch()

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services/example', function () {
    return view('services');
});

```
## Migraciones
- La migracion contempla la conexion a la base de datos, la creacion de tablas y conexion
- Para conectarnos a la base de datos usamos
```
php artisan migrate
```
- Para crear una migracion usamos
```
php artisan make:migration create_NombreDeLaTabla_table
```
- Para realizar una nueva migracion usamos
```
php artisan migrate
```
- Para hacer un rollback de la migracion
```
php artisan migrate:rollback
```
- Para hacer un rollback de todas las migraciones usamos 
```
php artisan migrate:refresh
```

## Model
- Para crear un modelo
```
php artisan make:model Note
```

- Para crear un modelo y migracion
```
php artisan make:model Author --migration
```