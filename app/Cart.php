<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Cart extends Model {
    public function user() 
    {
    return $this->belongsTo(User::class);
    }
}


//class Cart extends Model
//{
    //public $table = "carts";
    //public $primaryKey = "id";
   // public $timestamps = false;
  //  public $guarded = [];
   // public function getCart(){
      //  return $this->product-id . " " . $this->answer;
  //  }

//}
