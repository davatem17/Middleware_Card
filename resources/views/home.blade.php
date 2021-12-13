@extends('Layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-5xl text-center pt-24">Bienvenidos</h1>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg place-items-center ">
        <a class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600 mx-auto" 
            href="{{url('aprobado')}}"
        >Comprar</a>
        <h2 class="text-2xl text-center font-bold">Adquirir articulos</h2>
    </div>
    
@endsection