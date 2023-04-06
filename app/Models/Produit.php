<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
  protected $table = "produits";
  protected $fillable = ['name','unite_id','created_at','updated_at'];
  protected $hidden = ['created_at','updated_at'];
  public function unite (){
    return $this->hasMany(related:'unite::class');   
  }
}
