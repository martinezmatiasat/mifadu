@extends("layouts.jtp")

@section("banner")
<div class="banner-blanco">
   <div class="wrapper">
      <a href="jtp-tp-entregados-mosaico"><img class="marg-r-10" src="img/boton_volver_azul.png"
            alt="flecha azul" />Volver a Ver TP #1 | Nombre del Trabajo Práctico</a>
   </div>
</div>
<div class="banner-rojo">
   <div class="wrapper">
      <div class="titular">
         <span class="estas">Estás evaluando</span>
         <h2 class="titular-grande">Tp #1 | Nombre del Trabajo práctico</h2>
      </div>
   </div>
</div>
@endsection

@section("content")
<main class="contenido evaluar-tp">
   <div class="wrapper">
      <span class="titu">Estudiantes</span>
      <div class="grupete">
         <ul>
            <li>
               <img src="img/usuario.png" alt="" />
               <span>López Marilina</span>
            </li>
            <li>
               <img src="img/usuario.png" alt="" />
               <span>López Marilina</span>
            </li>
            <li>
               <img src="img/usuario.png" alt="" />
               <span>López Marilina</span>
            </li>
         </ul>
      </div>
   </div>
   <div class="notax">
      <div class="wrapper">
         <div class="col4 col-mob-1">
            <span class="titular-grande">Nota: <span class="titular-grande notax1">9</span></span>
         </div>
         <div class="col2 col-mob-1">
            <div class="checks">
               <div class="chequis">
                  <input class="checkbox1" type="checkbox" name="" value="">Promediar con otras <br /> notas de este
                  TP<br>
               </div>
            </div>
         </div>
         <div class="col2 col-mob-1">
            <p>Puede promediar su evaluación con <br /> la autoevaluación de lxs estudiantes y con<br /> las notas de
               los eventos</p>
         </div>
      </div>
   </div>
   <div class="reflexiones">
      <div class="wrapper">
         <label for="">Reflexiones sobre el TP</label>
         <textarea name="" rows="" cols=""
            placeholder="Escriba aquí los comentarios que crea hacer oportuno hacerle a lxs estudiantes acerca de este Trabajo Práctico"></textarea>
         <div class="botonesEv">
            <a href="" class="form-boton-cancelar">CANCELAR EVALUACIÓN</a>
            <a href="" class="form-boton">PUBLICAR EVALUACIÓN</a>
         </div>
      </div>
   </div>
</main>
@endsection