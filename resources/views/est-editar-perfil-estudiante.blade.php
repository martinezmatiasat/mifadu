@extends('layouts.est')

@section('banner')
<div class="banner-blanco">
   <div class="wrapper">
      <a href="est-tp-entregados-mosaico"><img class="marg-r-10" src="img/boton_volver_azul.png"
            alt="flecha azul" />Volver a Trabajos prácticos entregados</a>
   </div>
</div>
<div class="banner-azul corto">
   <div class="wrapper">
      <h2 class="titular-grande">Perfil de Estudiante</h2>
   </div>
</div>
@endsection

@section('content')
<main class="contenido perfil-estudi editar">
   <div class="wrapper ">
      <div class="col2 col-mob-1">
         <h4>Perfil de Natalia Marcos</h4>
         <div class="perfil-estudiante">
            <div class="bloque fotin-estudiante">
               <img src="img/perfil_nati.png" alt="Perfil Grande" />
            </div>
            <a class="cambiar" href="inicio-sesion"> Cambiar imagen</a>
         </div>
      </div>
      <div class="col5 col-mob-1">
         <form class="form-inicio" action="est-perfil-estudiante">
            <div class="flex">
               <div class="col4 col-mob-1">
                  <input type="text" placeholder="Nombre" required>
                  <input type="email" placeholder="Mail" required>
                  <input type="password" placeholder="Contraseña" required>
                  <input type="text" placeholder="DNI" required>
               </div>
               <div class="col4 col-mob-1">
                  <input type="text" placeholder="Apellido" required>
                  <input type="tel" placeholder="Celular" required>
                  <input type="password" placeholder="Confirmar contraseña" required>
                  <input type="date" placeholder="Fecha de nacimiento" required>
               </div>
            </div>
            <div class="selectines flex">
               <div>
                  <span>Materias cursadas</span>
                  <select class="marg">
                     <option value="todas"></option>
                     <option value="">Nicky y Martio</option>
                     <option value="">Nicky y Martio</option>
                     <option value="">Nicky y Martio</option>
                  </select>
               </div>
               <div>
                  <span>Taller al que perteneces</span>
                  <select class="marg" required>
                     <option value="todas"></option>
                     <option value="">Nicky y Martio</option>
                     <option value="">Nicky y Martio</option>
                     <option value="">Nicky y Martio</option>
                  </select>
               </div>
               <div>
                  <span>Comisión</span>
                  <select class="marg" required>
                     <option value="todas"></option>
                     <option value="">Nicky y Martio</option>
                     <option value="">Nicky y Martio</option>
                     <option value="">Nicky y Martio</option>
                  </select>
               </div>
            </div>
            <div class="yacurse">
               <div class="reflexiones">
                  <label for="">Contanos algo de vos</label>
                  <textarea name="" rows="" cols="" placeholder=""></textarea>
               </div>
            </div>
            <div id="estado-editar">
               <div>
                  <a class="form-boton-cancelar" href="est-perfil">CANCELAR</a>
                  <button class="form-boton" type="submit">APLICAR CAMBIOS</button>
               </div>
            </div>
      </div>
      </form>
   </div>
   </div>
</main>
@endsection