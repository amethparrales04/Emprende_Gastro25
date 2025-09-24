@extends('admin.webdesing')


@section('content')


@if(session('category_message'))
<div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
    {{session('category_message')}}
</div>
@endif
 <div class="container-fluid">
   
    <form action="{{route('admin.postaddcategory')}}" method="POST">
         @csrf
        <input type="text" name="categoria" placeholder="Introducir categoria">
        <input type="submit" name="submit" value="Añadir Categoria">
    </form>
 </div>

@endsection