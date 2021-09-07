@extends("layouts.jtp")

@section("banner")
<div class="banner-azul2">
   <div class="wrapper">
      <h2 class="titular-grande">Trabajos prácticos terminados</h2>
   </div>
</div>
@endsection

@section("content")
<main class="contenido entregados-lista">
   <div class="wrapper">
      <div class="filtros">
         <div class="visualizacion col-mob-1">
            <a href="jtp-tp-entregados-lista"><img src="img/icono_lista_activo.png" alt="" /></a>
            <a href="jtp-tp-entregados-mosaico"><img src="img/icono_tarjeta_desactivo.png" alt="" /></a>
         </div>
         <div class="desplegables col-mob-1">
            <span>Comisión</span>
            <select class="icon-flecha-abajo" style="margin-right: 15px;">
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
         <div class="checks col-mob-1">
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="">Evaluados <br>
            </div>
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="" value="" checked>Sin Evaluar <br>
            </div>
         </div>
      </div>
      <div>
         <div class="overflowx">
            <table class="trabajos-terminados">
               <tr height="25" class="header-table">
                  <th>Número<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="" /></th>
                  <th>Nombre<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="" /></th>
                  <th>Estudiante<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="" /></th>
                  <th>Comisión</th>
                  <th>Inicio</th>
                  <th>Entrega</th>
                  <th>Estado</th>
                  <th>Nota<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="" /></th>
                  <th></th>
                  <th></th>
               </tr>
               <tr class="campos">
                  <td class="regular">#1</td>
                  <td>Nombre del TP</td>
                  <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
                  <td class="regular">Docente y Docente</td>
                  <td class="regular">11/12/2020</td>
                  <td class="regular">30/12/2020</td>
                  <td>
                     <div class="tag evaluado">
                        <span>EVALUADO</span>
                     </div>
                  </td>
                  <td class="regular">9</td>
                  <td><a href=""><img style="transform: scale(0.8);" src="img/boton_descarga_2x.png" alt="" /></a></td>
                  <td><a class="boton-tab" href="jtp-tp-evaluado">VER TP</a></td>
               </tr>
               <tr class="campos">
                  <td class="regular">#1</td>
                  <td>Nombre del TP</td>
                  <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
                  <td class="regular">Docente y Docente</td>
                  <td class="regular">11/12/2020</td>
                  <td class="regular">30/12/2020</td>
                  <td>
                     <div class="tag no-evaluado">
                        <span>SIN EVALUAR</span>
                     </div>
                  </td>
                  <td class="regular">9</td>
                  <td><a href=""><img style="transform: scale(0.8);" src="img/boton_descarga_2x.png" alt="" /></a></td>
                  <td><a class="boton-tab" href="jtp-tp-sin-evaluar">VER TP</a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</main>
@endsection