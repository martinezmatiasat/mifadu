@extends("layouts.jtp")

@section("banner")
<div class="banner-azul2">
   <div class="wrapper">
      <h2 class="titular-grande">Trabajos prácticos terminados</h2>
   </div>
</div>
@endsection

@section("content")
<main class="contenido terminados-mosaico">
   <div class="wrapper">
      <div class="filtros">
         <div class="visualizacion">
            <a href="jtp-tp-entregados-lista"><img src="img/icono_lista_desactivo.png" alt="" /></a>
            <a href="jtp-tp-entregados-mosaico"><img src="img/icono_tarjeta_activo.png" alt="" /></a>
         </div>
         <div class="desplegables">
            <span>Comisión</span>
            <select class="marg icon-flecha-abajo">
               <option value="todas">Todas</option>
               <option value="">Nicky y Martio</option>
               <option value="">Nicky y Martio</option>
               <option value="">Nicky y Martio</option>
            </select>
            <span>N TP</span>
            <select class="icon-flecha-abajo">
               <option value="todas">1</option>
               <option value="">2</option>
               <option value="">3</option>
               <option value="">4</option>
            </select>
         </div>
         <div class="ordenar">
            <span>Ordenar Publicaciones</span><span>Últimos entregados<img class="marg-l-5"
                  src="img/boton_flecha_abajo_gris.png" alt="flecha baajo"></span>
         </div>
         <div class="checks">
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="">Evaluados <br>
            </div>
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="" checked>Sin Evaluar <br>
            </div>
         </div>
      </div>
      <div class="checks-ordenar">
         <div class="checks">
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="">Últimos entregados <br>
            </div>
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="">Más antiguos<br>
            </div>
         </div>
         <div class="checks">
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="">Nombre de estudiante<br>
            </div>
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="">Nota<br>
            </div>
         </div>
      </div>
      <div class="tarjetones">
         <ul class="kak">
            <li class="inline-block">
               <div class="ficha-trabajo">
                  <a class="boton-desc" href=""><img src="img/boton_descarga_2x.png" alt="" /></a>
                  <div class="tag no-evaluado">
                     <span>SIN EVALUAR</span>
                  </div>
                  <a href="jtp-tp-sin-evaluar">
                     <div class="imagen">
                        <img src="img/TP_proyecto1_2x.png" alt="Foto-proyecto" />
                     </div>
                     <div class="ficha-trabajo-inner">
                        <ul class="datos-trabajo">
                           <li>
                              <span class="bold">Nombre del TP</span>
                           </li>
                           <li>
                              <img class="trabajo-icono" src="img/usuario.png" alt="" />
                              Estudiante:<br />
                              <span class="bold">Natalia Marcos</span>
                           </li>
                           <li>
                              Comisión<br />
                              <span class="bold">Docente y docente</span>
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
                  <a class="boton-desc" href=""><img src="img/boton_descarga_2x.png" alt="" /></a>
                  <div class="tag evaluado">
                     <span>EVALUADO</span>
                  </div>
                  <a href="jtp-tp-sin-evaluar">
                     <div class="imagen">
                        <img src="img/TP_proyecto1_2x.png" alt="Foto-proyecto" />
                     </div>
                     <div class="ficha-trabajo-inner">
                        <ul class="datos-trabajo">
                           <li>
                              <span class="bold">Nombre del TP</span>
                           </li>
                           <li>
                              <img class="trabajo-icono" src="img/usuario.png" alt="" />
                              Estudiante:<br />
                              <span class="bold">Natalia Marcos</span>
                           </li>
                           <li>
                              Comisión<br />
                              <span class="bold">Docente y docente</span>
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
   <div class="paginador">
      <ul>
         <li class="flecha"><i class="fa fa-chevron-left"></i></li>
         <li><a class="activo-pag" href="">1</a></li>
         <li><a href="">2</a></li>
         <li><a href="">3</a></li>
         <li class="flecha"><i class="fa fa-chevron-right"></i></li>
      </ul>
   </div>
</main>
@endsection