@extends("layouts.est")

@section("banner")
<div class="banner-azul2">
   <div class="wrapper">
      <h2 class="titular-grande">Trabajos prácticos terminados</h2>
   </div>
</div>
@endsection

@section("content")
<main class="contenido est-terminados">
   <div class="wrapper">
      <div class="filtros">
         <div class="visualizacion">
            <a href="est-tp-entregados-lista"><img src="img/icono_lista_activo.png" alt=""></a>
            <a href="est-tp-entregados-mosaico"><img src="img/icono_tarjeta_desactivo.png" alt=""></a>
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
      <div class="overflowx">
         <table class="trabajos-terminados">
            <tbody>
               <tr class="header-table" height="25">
                  <th>Número<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"></th>
                  <th>Nombre<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"></th>
                  <th>Inicio<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"></th>
                  <th>Entrega</th>
                  <th>Estado</th>
                  <th>Nota<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"></th>
                  <th></th>
                  <th></th>
               </tr>
               <tr class="campos">
                  <td class="regular">#1</td>
                  <td>Nombre del TP</td>
                  <td class="regular">11/12/2020</td>
                  <td class="regular">30/12/2020</td>
                  <td>
                     <div class="tag evaluado">
                        <span>EVALUADO</span>
                     </div>
                  </td>
                  <td class="regular">9</td>
                  <td></td>
                  <td><a class="boton-tab" href="est-tp-evaluado">VER TP</a></td>
               </tr>
               <tr class="campos">
                  <td class="regular">#2</td>
                  <td>Nombre del TP</td>
                  <td class="regular">11/12/2020</td>
                  <td class="regular">30/12/2020</td>
                  <td>
                     <div class="tag no-evaluado">
                        <span>SIN EVALUAR</span>
                     </div>
                  </td>
                  <td class="regular pendiente">Pendiente</td>
                  <td></td>
                  <td><a class="boton-tab" href="est-tp-evaluado">VER TP</a></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</main>
@endsection