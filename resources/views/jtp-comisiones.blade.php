@extends("layouts.jtp")

@section("banner")
<div class="banner-azul2">
   <div class="wrapper">
      <h2 class="titular-grande">Comisiones</h2>
   </div>
</div>
@endsection

@section("content")
<main class="contenido comishons">
   <div class="wrapper">
      <ul>
         <li class="ficha-comision">
            <div class="ficha-comision-inner">
               <a href=""><img src="img/boton_cesto_rojo.png" alt="eliminar" /></a>
               <h4>Comisión 1</h4>
               <span>Docente 1: Julián Fernández</span>
               <span>Docente 2: Sebastián Poelstra</span>
            </div>
         </li>
         <li class="ficha-comision">
            <div class="ficha-comision-inner">
               <a href=""><img src="img/boton_cesto_rojo.png" alt="eliminar" /></a>
               <h4>Comisión 2</h4>
               <span>Docente 1: Julián Fernández</span>
               <span>Docente 2: Sebastián Poelstra</span>
            </div>
         </li>
         <li class="ficha-comision">
            <div class="ficha-comision-inner">
               <a href=""><img src="img/boton_cesto_rojo.png" alt="eliminar" /></a>
               <h4>Comisión 3</h4>
               <span>Docente 1: Julián Fernández</span>
               <span>Docente 2: Sebastián Poelstra</span>
            </div>
         </li>
         <li class="ficha-comision">
            <div class="ficha-comision-inner">
               <a href=""><img src="img/boton_cesto_rojo.png" alt="eliminar" /></a>
               <h4>Comisión 4</h4>
               <span>Docente 1: Julián Fernández</span>
               <span>Docente 2: Sebastián Poelstra</span>
            </div>
         </li>
      </ul>
   </div>
   <div class="nueva-comi">
      <div class="wrapper">
         <div class="col5 col-mob-1">
            <h4>Crear nueva comisión</h4>
            <a class="boton-celeste2" href="">+ AGREGAR OTRO DOCENTE</a>
            <div class="inputs">
               <div>
                  <label for="">Nombre del docente 1</label>
                  <input style="margin-right:15px;" type="text" placeholder="Nombre">
                  <input type="text" placeholder="Apellido">

               </div>
            </div>
            <div class="inputs">
               <div>
                  <label for="">Nombre del docente 2</label>
                  <input style="margin-right:15px;" type="text" placeholder="Nombre">
                  <input type="text" placeholder="Apellido">

               </div>
            </div>
            <div class="botones-comision">
               <a href="" class="form-boton-cancelar">CANCELAR</a>
               <a href="" class="form-boton">CREAR COMISIÓN</a>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection