@extends("layouts.jtp")

@section("banner")
<div class="banner-blanco">
   <div class="wrapper">
      <a href="jtp-tp-entregados-mosaico"><img class="marg-r-10" src="img/boton_volver_azul.png"
            alt="flecha azul" />Volver a Trabajos prácticos entregados</a>
   </div>
</div>
<div class="banner-negro">
   <div class="wrapper">
      <div class="titular">
         <span class="estas">Evaluación</span>
         <h2 class="titular-grande">Tp #1 | Nombre del Trabajo práctico</h2>
      </div>
      <div class="notas">
         <span class="nitin">Nota: <span class="nitin">9</span></span>
         <span class="bajada">La nota refleja solo la Evaluación final</span>
      </div>
   </div>
</div>
@endsection

@section("content")
<main class="contenido est-evaluacion" id="estudiante">
   <div class="wrapper">

      <div class="tab">
         <div class="tab-activo">
            <button class="tablinks active" onclick="TabPractico(event, 'evento')">Evento #1</button>
         </div>
         <div>
            <button class="tablinks" onclick="TabPractico(event, 'autoevaluacion')">Autoevaluación</button>
         </div>
         <div>
            <button class="tablinks" onclick="TabPractico(event, 'evaluacionfinal')">Evaluación final</button>
         </div>
         <div>
            <button class="tablinks" onclick="TabPractico(event, 'promedio')">Promedio</button>
         </div>
      </div>

      <div class="evento">
         <div id="evento" class="tabcontenido">
            Evento
         </div>
      </div>

      <div class="autoevaluacion">
         <div style="display:none;" id="autoevaluacion" class="tabcontenido">
            Autoevaluacion
         </div>
      </div>

      <div class="evaluacionfinal">
         <div style="display:none;" id="evaluacionfinal" class="tabcontenido">
            Evaluación final
         </div>
      </div>

      <div class="promedio">
         <div style="display:none;" id="promedio" class="tabcontenido">
            Promedio
         </div>
      </div>

      <div class="reflexiones">
         <span>Reflexiones sobre el TP</span>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, lorem nec porta pulvinar, dolor
            metus gravida lorem, in varius augue lacus ut ligula. Morbi vel eleifend turpis. Donec hendrerit lacus ex,
            sed tristique ligula cursus in. Nunc ipsum eros, commodo nec sem sit amet, congue laoreet urna. Mauris eu
            commodo lacus. Nullam feugiat, libero in imperdiet sodales, tellus libero viverra nunc, at dapibus elit
            dolor eu lorem.</p>
      </div>
   </div>
</main>
@endsection