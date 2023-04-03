@extends('layout')
@section('title','Produit')
@section('content')
<center>
  
<div class="bg-black w-max p-4 rounded-xl mt-40">




    <form action="{{route('unite.store')}}" method="POST">
  @csrf
  <input type="text" value="" name="nameunite" class="bg-red-50 border-blue-500 p-4 ">
    <input type="text" value="" name="postion" class="bg-red-50 border-blue-500 p-4 mt-4">
  <div class="mb-3 xl:w-96 mt-4">
    <label for="option" class="block font-medium text-lg text-gray-700 mb-2">Select an produit:</label>
    <select id="option" name="option" class="bg-blue-50 w-40 flex justify-center items-center text-xl rounded-lg p-4">
      @foreach ($produit as $value)
    <option value="1">value</option>
        
      @endforeach
    </select>
  </div>
  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Create
  </button>
</form>
</center>
@endsection


