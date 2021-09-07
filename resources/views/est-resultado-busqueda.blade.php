@extends('layouts.est')

@section('banner')
<div class="banner-azul2">
   <div class="wrapper">
      <h2 class="titular-grande">Resultados de la búsqueda FRASE-BUSCADA</h2>
   </div>
</div>
@endsection

@section('content')
<main class="contenido est-terminados">
   <div class="wrapper">
      <div class="filtros">
         <div class="checks">
            <div class="chequis">
               <h4>Trabajos prácticos </h4>
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
   <br><br>
   <div class="wrapper">
      <div class="filtros">
         <div class="checks">
            <div class="chequis">
               <h4>Miembros del taller </h4>
            </div>
         </div>
      </div>
      <div class="overflowx">
         <table class="trabajos-terminados">
            <tbody>
               <tr class="header-table" height="25">
                  <th>Nombre<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"></th>
                  <th>Rol<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"></th>
                  <th>Comisión<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"></th>
                  <th></th>
                  <th></th>
               </tr>
               <tr class="campos">
                  <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
                  <td class="regular">Estudiante</td>
                  <td class="regular">Comisión A</td>
                  <td class="regular">hola@gmail.com</td>
                  <td><a class="boton-tab" href="est-perfil-estudiante">VER PERFIL</a></td>
               </tr>
               <tr class="campos">
                  <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
                  <td class="regular">Estudiante</td>
                  <td class="regular">Comisión A</td>
                  <td class="regular">hola@gmail.com</td>
                  <td><a class="boton-tab" href="est-perfil-estudiante">VER PERFIL</a></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</main>
@endsection