@extends("layouts.jtp")

@section("banner")
<div class="banner-azul">
   <div class="wrapper">
      <a href="jtp-perfil"><img class="marg-r-10" src="img/boton_volver_blanco.png" alt="flecha blanca" />Volver al
         inicio</a>
      <h2 class="titular-grande">Perfil de Estudiante</h2>
   </div>
</div>
@endsection

@section("content")
<main class="contenido perfil-estudi">
   <div class="wrapper">
      <div class="col2 col-mob-1" style="display:inline-block;">
         <h4>Perfil de Natalia Marcos</h4>
      </div>
      <a class="boton-tab" href="#">ENVIAR MAIL</a>
      <div class="perfil-estudiante">
         <div class="bloque col-mob-1 fotin-estudiante">
            <img src="img/perfil_nati.png" alt="Perfil Grande" />
         </div>
         <div class="bloque col-mob-1 informacion-estudiante">
            <ul>
               <li>
                  <img src="img/icon_user.png" alt="Usuario" />
                  <p>Nombre completo: Natalia Marcos</p>
               </li>
               <li>
                  <img src="img/icon_cake.png" alt="DNI" />
                  <p>DNI: 27444666</p>
               </li>
               <li>
                  <img src="img/icon_cake.png" alt="Edad" />
                  <p>Edad: 27</p>
               </li>
               <li>
                  <img src="img/icon_mail_negro.png" alt="Correo" />
                  <p>Mail: hola@gmail.com</p>
               </li>
               <li>
                  <img src="img/material-phone-android.png" alt="" />
                  <p>Cel: (011) 1132328989</p>
               </li>
            </ul>
            <div class="algo">
               <h5>Algo sobre mí</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula consequat tellus vel cursus.
                  Curabitur molestie purus a mollis molestie. Vestibulum dui erat, congue quis ornare id, posuere ac
                  eros. Etiam ipsum libero, tempus vitae convallis at, congue quis lorem. Quisque quis sagittis ligula,
                  id vestibulum nunc. Donec semper, odio maximus vulputate pretium, sem enim finibus elit, in efficitur
                  mi nisl sit amet neque. In porttitor venenatis ornare. Sed vestibulum a felis quis luctus.</p>
            </div>
         </div>
         <div class="bloque col-mob-1 info-extra">
            <ul>
               <li>
                  <h5>Materias cursadas</h5>
                  <p>Materia 1, Materia 2, Materia 3</p>
               </li>
               <li>
                  <h5>Taller al que pertenece</h5>
                  <p>Diseño 3</p>
               </li>
               <li>
                  <h5>Comisión</h5>
                  <p>Docente y Docente</p>
               </li>
            </ul>
         </div>
      </div>
   </div>
</main>

<div class="proyectos">
   <div class="wrapper">
      <h4>Proyectos entregados</h4>
      <div class="tarjetones">
         <ul>
            <li class="inline-block">
               <div class="ficha-trabajo">
                  <a class="boton-desc" href=""><img src="img/boton_descarga_2x.png" alt="" /></a>
                  <div class="tag evaluado">
                     <span>EVALUADO</span>
                  </div>
                  <a href="jtp-tp-evaluado">
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
                              Estudiante:
                              <span class="bold">Natalia Marcos</span>
                           </li>
                           <li>
                              Comisión
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
            <li class="inline-block">
               <div class="ficha-trabajo">
                  <a class="boton-desc" href=""><img src="img/boton_descarga_2x.png" alt="" /></a>
                  <div class="tag evaluado">
                     <span>EVALUADO</span>
                  </div>
                  <a href="jtp-tp-evaluado">
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
                              Estudiante:
                              <span class="bold">Natalia Marcos</span>
                           </li>
                           <li>
                              Comisión
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
            <li class="inline-block">
               <div class="ficha-trabajo">
                  <a class="boton-desc" href=""><img src="img/boton_descarga_2x.png" alt="" /></a>
                  <div class="tag evaluado">
                     <span>EVALUADO</span>
                  </div>
                  <a href="jtp-tp-evaluado">
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
                              Estudiante:
                              <span class="bold">Natalia Marcos</span>
                           </li>
                           <li>
                              Comisión
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
</div>
@endsection