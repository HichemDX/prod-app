@extends('layout')
@section('title','Produit')
@section('content')
<center>
<div class="bg-black w-max p-4 rounded-xl mt-40">
  <form action="{{route('produit.store')}}" method="post" class="flex flex-col justify-center items-center ">
    @csrf
    <input type="text" value="" name="nameproduit" class="bg-red-50 border-blue-500 p-4 ">
    <input type="text" value="" name="unite_id" class="bg-red-50 border-blue-500 p-4 ">
    <button type="submit" class="text-white bg-blue-400 w-32 h-20 rounded-3xl hover:bg-green-500 text-2xl font-bold mt-4">Create</button>
  </form>
</div>
</center>
@endsection

