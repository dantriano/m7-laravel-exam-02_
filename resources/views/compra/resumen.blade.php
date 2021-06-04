@extends('layouts.app')

@section('content')
@php ($total=0)
@php ($numProducts=0)
<!--TODO: Calculo de precios-->

<!--Fin del Bloque-->
<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">Lego Shop</h1>
    <ul class="list-group">
      <li class="list-group-item">
        Total de productos: {{$numProducts}}</li>
      <li class="list-group-item">
        Precio total de productos: ${{$total}}</li>
    </ul>



  </div>

  <div class="col-lg-9">
    <div class="row">
      @forelse ($products as $product)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('img/'.$product->image) }}" alt=""></a>
          <div class="card-body">
            <h3 class="card-title">
              <a href="#">{{$product->name}}</a>
            </h3>
            <h4>to {{$product->action}}</h4>
            <h5>${{$product->price}}</h5>
          </div>
        </div>
      </div>
      @empty
      <p>No products to show</p>
      @endforelse
    </div>
  </div>
</div>


<a href="{{ url('/') }}" class="btn btn-secondary btn-lg float-left">Atras</a>
<a href="{{ url('/compra/envio') }}" class="btn btn-primary btn-lg float-right">Siguiente</a>
<br><br>
@endsection