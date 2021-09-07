@extends('layouts.est')

@section('banner')
<div class="banner-azul2">
   <div class="wrapper">
      <h2 class="titular-grande">Trabajos prácticos terminados</h2>
   </div>
</div>
@endsection

@section('content')
<main class="contenido terminados-mosaico est-terminados-mosaico">
   <div class="wrapper">
      <div class="filtros">
         <div class="visualizacion">
            <a href="est-tp-entregados-lista"><img src="img/icono_lista_desactivo.png" alt="" /></a>
            <a href="est-tp-entregados-mosaico"><img src="img/icono_tarjeta_activo.png" alt="" /></a>
         </div>
         <div class="checks">
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="">Evaluados <br>
            </div>
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="">Sin Evaluar <br>
            </div>
         </div>
      </div>
      <div class="tarjetones">
         <ul class="kak">
            <li class="inline-block">
               <div class="ficha-trabajo">
                  <div class="tag no-evaluado">
                     <span>SIN EVALUAR</span>
                  </div>
                  <a href="est-tp-evaluado">
                     <div class="imagen">
                        <img src="img/TP_proyecto1_2x.png" alt="Foto-proyecto" />
                     </div>
                     <div class="ficha-trabajo-inner">
                        <ul class="datos-trabajo">
                           <li>
                              <span class="bold">Nombre del TP</span>
                           </li>
                           <li>
                              Inicio:
                              <span>01/09/2021</span>
                           </li>
                           <li>
                              Entrega:
                              <span>12/012/2021</span>
                           </li>
                           <li class="nota">
                              <span class="pendiente">Pendiente</span>
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </li>
            <li class="inline-block">
               <div class="ficha-trabajo">
                  <div class="tag evaluado">
                     <span>EVALUADO</span>
                  </div>
                  <a href="est-tp-evaluado">
                     <div class="imagen">
                        <img src="img/TP_proyecto1_2x.png" alt="Foto-proyecto" />
                     </div>
                     <div class="ficha-trabajo-inner">
                        <ul class="datos-trabajo">
                           <li>
                              <span class="bold">Nombre del TP</span>
                           </li>
                           <li>
                              Inicio:
                              <span>01/09/2021</span>
                           </li>
                           <li>
                              Entrega:
                              <span>12/012/2021</span>
                           </li>
                           <li class="nota">
                              Nota
                              <span>9</span>
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </li>
         </ul>
      </div>
   </div>
</main>
@endsection