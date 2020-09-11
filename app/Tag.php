<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = [
    "car_body",
  ];

  // Methods
  // Many Tags belongsTo many Cars
  public function cars() {
    return $this->belongsToMany("App\Car");
  }
}
