@extends('layouts/master')
@section('content')
         <!-- <?php foreach ($preguntas as $key => $value):?>
            <tr>

              <td><?=$value["question"];?></td>
              <td><?=$value["answer"];?></td>
              
            </tr>
          <?php endforeach;?>
      </tbody>
  </div>
</div>-->
<div class="container">
<h3>Preguntas frecuentes</h3>
    <ul>
        @forelse ($preguntas as $pregunta)
        <li>
            {{$pregunta->question}}
        </li>
        <li>
            {{$pregunta->answer}}
        </li>
        @empty
        <p>No hay preguntas para mostrar</p>    
        @endforelse
    </ul>
  </div>
@endsection