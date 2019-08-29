<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Stock;
class Product extends Model
{
    protected $guarded =[];

    public function category() 
    {
        
        return $this->belongsTo(Category::class);
    }
    public function stock() 
    {
        return $this->hasOne(Stock::class);
    }
}





//class Product extends Model
//{
    //public $table = "products";
    //public $primaryKey = "id";
   // public $timestamps = false;
 //   public $guarded = [];
//}
