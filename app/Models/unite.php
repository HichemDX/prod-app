<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unite extends Model
{
  protected $table = "unites";
  protected $fillable = ['name', 'position', 'created_at', 'updated_at'];
  protected $hidden = ['created_at', 'updated_at', 'pivot'];


  public function produit()
  {
    return $this->belongsToMany('App\Models\produit', table: 'unite_produit', foreignPivotKey: 'unite_id', relatedPivotKey: 'produit_id');
  }
}
