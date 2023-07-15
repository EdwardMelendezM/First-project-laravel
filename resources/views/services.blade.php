@extends('layouts.layout')

@section('title','Services')

@section('content')
  <h1>Onichan Services</h1>
  <div>
    @component('_components.card')
      @slot('title',"Service 1")
      @slot('content')
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur quos obcaecati at! Aut molestiae quasi, eum fuga libero consequatur, beatae qui praesentium earum magnam quas nemo placeat soluta officiis in.
      @endSlot
    @endcomponent

    @component('_components.card')
      @slot('title',"Service 2")
      @slot('content')
         Eum fuga libero consequatur, beatae qui praesentium earum magnam quas nemo placeat soluta officiis in.
      @endSlot
    @endcomponent

  </div>

@endsection