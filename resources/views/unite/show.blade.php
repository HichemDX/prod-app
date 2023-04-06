@extends('layout')
@section('title','Produit')
@section('content')

<center>

  <div class="bg-red-50 w-max p-4 text-xl mt-14">
    <h1>{{ $unite['id'] }} {{ $unite['name'] }} {{ $unite['position'] }}</h3>
      <h1>

      @if (count($unite->produit)>0)
        <label for="cars">Choose the produit:</label>
<select name="cars" id="cars">
<?php

  $produit = $unite->produit ;
  foreach($produit as $value){
    echo"<option value='.$value->name.'>".$value->name."</option>";
  
  }
?>
</select>
@else
<h1>pas de produit</h1>
      @endif




      </h1>


  </div>
<form action="" method="get">
  <button>deleate</button>
</form>
<?php
if(isset($_GET['DELATE'])){
$unite ->produit()->delete();
$unite ->delete();
}
?>
</center>

<div class="w-screen bg-blue-50 mt-4">
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">id</th>
              <th scope="col" class="px-6 py-4">name</th>

            </tr>
          </thead>
      @if (count($unite->produit)>0)
          
          <?php

foreach($produit as $value){
  echo "<tbody>";
echo "<td class=\"whitespace-nowrap px-6 py-4 font-medium\">".$value->id."</td>";
echo "<td class=\"whitespace-nowrap px-6 py-4\">".$value->name."</td>";
echo "</tbody>";

}
?>    
          
        </table>
        @else
        <center>
        <h1>pas de produit</h1>
        </center>
      @endif
</div>

</div>
@endsection