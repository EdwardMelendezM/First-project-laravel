@extends('layouts.layout')

@section('title','CasaOnichan')

@section('content')

<h1>Onichan home</h1>
<ul>
  <h3>Lista de usuarios</h3>
  {{-- @if ($users->isEmpty())
    <li> No hay usuarios</li>
  @else --}}
    @foreach ($users as $user)
    <div>
      <li> Nombre: {{$user->name}} -- Email: {{$user->email}} </li>
    </div>
      
    @endforeach
   {{-- @endif --}}
</ul>

@endsection 