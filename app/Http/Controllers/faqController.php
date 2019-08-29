<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;

class faqController extends Controller
{
    //public function list() {
    //    dd("Esto es un echo de la funcion listar en el controlador de faq (para que el administrador pueda editar la lista), esta funcion deberia retornar la lista de las preguntas y respuestas leyendo desde la tabla faq de la base de datos.");
    //}

    public function list(){
        $preguntas = Pregunta::all();

        $vac = compact('preguntas');

        return view ('faq', $vac);
    }

    public function add(Request $req) {
        
        $newPregunta = new Pregunta();
        
        $newPregunta->question = $req['question'];
        $newPregunta->answer = $req['answer'];

        $newPregunta->save();
        
        return redirect('/faq');
    }

    public function Destroy(id $preguntas){
        
        $preguntas = Pregunta::find($id);
        
        $preguntas->delete();

        return redirect('/faq');

    }
}
