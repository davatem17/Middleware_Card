@extends('Layouts.app')

@section('title', 'Register')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Register</h1>
    <form class="mt-4" method="POST" action="">
        @csrf
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name" id="name" name="name">
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password confirmation" id="password_confirmation" name="password_confirmation">
        <label>
         <input type="radio" value=1> Si
        </label>
        <label>
         <input type="radio" class="accent-pink-500" value=0> No
        </label>
        <button class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600" type="submit" >Enviar</button>
    </form>
</div>
@endsection