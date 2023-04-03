@extends('layout')
@section('title','Produit')
@section('content')

<center>
<div class="p-4">
  <a href="produit/create">
  <button class="bg-blue-400 w-32 h-20 rounded-3xl hover:bg-green-500 text-2xl font-bold  ">Create</button>

  </a>
 </div>
  <div class="bg-red-50 w-max p-4 text-xl mt-14">
    
    <ul class="flex flex-col justify-center items-start gap-4">
    @if (count($produit)>0)
    <h1 class="font-bold mb-4">les produits est:</h1>  
    
      @foreach($produit as $value)
      <a href="{{route('produit.show',['produit'=>$value['id'] ])}}" class="bg-blue-500 p-4 w-full rounded-2xl hover:bg-slate-500">
      <li>{{ $value['id'] }} {{ $value['name'] }}</li>

      </a>
  @endforeach
  </ul>
  @else
  <h1>No Produit</h1>
  @endif
  </div> 


</center>

@endsection

