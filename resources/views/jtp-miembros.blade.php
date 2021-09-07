@extends("layouts.jtp")

@section("banner")
<div class="banner-azul">
   <div class="wrapper">
      <a href="jtp-perfil"><img class="marg-r-10" src="img/boton_volver_blanco.png" alt="flecha blanca">Volver al inicio</a>
      <h2 class="titular-grande">Miembros del taller</h2>
   </div>
</div>
@endsection

@section("content")
<main class="contenido">
   <div class="wrapper">
      <h4><span class="num">Total: 36</span></h4>
      <div class="miembros">
         <table>
            <tr height="25" class="header-table">
               <th>Nombre <img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"> </th>
               <th>Rol <img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"> </th>
               <th>Comisión <img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"> </th>
               <th></th>
               <th></th>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
            <tr class="campos">
               <td><img src="img/alumno.png" alt="Alumno" />Apellido Nombre</td>
               <td>Estudiante</td>
               <td>Comisión A</td>
               <td>hola@gmail.com</td>
               <td><a class="boton-tab" href="jtp-perfil-estudiante">VER PERFIL</a></td>
            </tr>
         </table>
         <div class="paginador">
            <ul>
               <li class="flecha"><a href=""><img src="img/flecha-izquierda.png" alt="" /></a></li>
               <li><a class="activo-pag" href="">1</a></li>
               <li><a href="">2</a></li>
               <li><a href="">3</a></li>
               <li class="flecha"><a href=""><img src="img/flecha-derecha.png" alt="" /></a></li>
            </ul>
         </div>
      </div>
   </div>
</main>
@endsection