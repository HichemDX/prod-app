@extends('layout')
@section('title','Produit')
@section('content')
<center>
  <div class="bg-red-50 w-max p-4 text-xl mt-14">
  <h1>{{ $produit['id'] }} {{ $produit['name'] }}</h3>
  
  </div>

</center>
@endsection

