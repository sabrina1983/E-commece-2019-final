<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public $table = "faq";
    //public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function getPreguntaYRespuesta(){
        return $this->question . " " . $this->answer;
    }
}
