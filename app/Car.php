<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
      "user_id",
      "manufacturer",
      "model",
      "engine",
      "plate",
      "year",
      "price",
    ];

    // Methods
    // Every Cars belongsTo only one User
    public function user() {
      return $this->belongsTo("App\User");
    }

    // Many Cars belongsTo many Tags
    public function tags() {
      return $this->belongsToMany("App\Tag");
    }
}
