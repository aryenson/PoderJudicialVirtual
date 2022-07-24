@extends('layouts.app')

@section('title', 'Facturacion')

@section('content')
    
  <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
  rounded-lg shadow-lg">
  
  <h6 class="text-5xl text-center pt-24">Facturas</h6>

  <table class="table table-striped">
    <thead>
<tr>
<th>Cliente</th>
<th>Monto total</th>
<th>Impuesto total</th>
</tr>
    </thead>
    <tbody>

    @if(count($fact)<=0)
      <tr>
          <td colspan="16">No hay Resultados</td>
      </tr>
    @else
        @foreach ($fact as $cliente)                                                    
<tr>
<td>{{$cliente->name}}</td>
<td>{{$cliente->TotalCost}}</td>
<td>{{$cliente->Totaltax}}</td>

</tr>                       
        @endforeach
        @endif
    </tbody>
 </table>

 <h6 class="text-5xl text-center pt-24">Listado de compras</h6>
 <table class="table table-striped">
    <thead>
<tr>
<th>Nombre producto</th>
<th>Precio</th>
<th>Impuesto</th>
</tr>
    </thead>
    <tbody>

    @if(count($prod)<=0)
      <tr>
          <td colspan="16">No hay Resultados</td>
      </tr>
    @else
        @foreach ($prod as $cliente)                                                    
<tr>
<td>{{$cliente->name}}</td>
<td>{{$cliente->price}}</td>
<td>{{$cliente->tax}}</td>

</tr>                       
        @endforeach
        @endif
    </tbody>
 </table>

</div>

@endsection