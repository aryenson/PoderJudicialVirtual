@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
  <h4 class="text-5xl text-center pt-24">Comprar Productos</h4>

  <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
  rounded-lg shadow-lg">
  
<form accept-charset="UTF-8" class="mt-4"
   method="POST" action="{{route('home.store')}}">
                       @csrf

  <input type="hidden" name="idUser" value="{{ auth()->user()->id }}" >

<table class="table">
<tr>
<td>Seleccione el producto
</td>
<td>
  <select id="productos" name="ddlproductos" class="form-control">
    @foreach ($Lstproductos as $prod)  
    <option value="{{ $prod->id }}">{{ $prod->name }}</option>

    @endforeach
  </select>
</td>
</tr>
</table>

<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Comprar</button>



 

</form>

</div>

@endsection