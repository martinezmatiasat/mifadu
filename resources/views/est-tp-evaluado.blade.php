@extends('layouts.est')

@section('banner')
<div class="banner-blanco">
   <div class="wrapper">
      <a href="est-tp-entregados-lista"><img class="marg-r-10" src="img/boton_volver_azul.png"
            alt="flecha azul" />Volver a trabajos prácticos entregados </a>
   </div>
</div>
<div class="banner-foto">
</div>
@endsection

@section('banner')
<main class="contenido tp-sin-evaluar">
   <div class="wrapper">
      <div class="cabezal">
         <span>Materia: Diseño 3</span>
         <span>Año <span>2019</span></span>
         <span>Comisión: <span>Nicky y Martio</span></span>
         <span class="tag evaluado">EVALUADO</span>
      </div>
      <div class="arriba" style="font-size:0;">
         <div class="col4 col-mob-1 inline-block middle">
            <h4 style="display:inline; margin-right: 60px;">Tp #1 | Nombre del Trabajo práctico</h4>
         </div>
         <div class="col2 col-mob-1 inline-block middle">
            <span class="priv">privado</span>
            <label class="switch">
               <input class="control" type="checkbox" checked>
               <span class="slider round"></span>
            </label>
            <span class="pub switch-act">público</span>
         </div>
         <div class="est-nota col2 col-mob-1 inline-block middle">
            <span class="middle">Nota: <span>9</span></span>
            <a class="boton-violeta middle" href="est-evaluacion">VER EVALUACIÓN</a>
         </div>
      </div>
      <div class="linea1">
         <div class="tags">
            <span class="titulo">Etiquetas</span>
            <span class="etiquetas">MATERIALES</span>
            <span class="etiquetas">MATERIALES</span>
            <span class="etiquetas">MATERIALES</span>
         </div>
         <div class="variable">
            <span class="titulo">Variable de evaluación: </span>
            <span class="resultado">Test</span>
         </div>
         <div class="tipo">
            <span class="titulo">Tipo: </span>
            <span class="resultado">Grupal</span>
         </div>
      </div>
      <div class="linea2 col-mob-1">
         <div class="descripcion col-mob-1">
            <span class="titulo18">Descripción del ejercicio</span>
            <p class="texto-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus, velit sed
               pharetra porttitor, enim velit hendrerit eros, sed scelerisque lacus neque id nisl. Sed luctus ornare
               ligula. Sed eget libero vel ipsum dictum dictum in sed enim. Sed facilisis eleifend porta. Morbi mollis
               nibh sit amet orci consequat, non iaculis orci luctus. Donec vehicula tortor quis augue tempus, nec
               malesuada nisi luctus. Maecenas nibh odio, tincidunt nec tincidunt in, euismod quis arcu. Etiam tincidunt
               urna at nisl dignissim euismod. Aenean egestas nunc non odio rutrum, vel porttitor sapien tincidunt.</p>
            <div class="demanda">
               <span class="titulo18">Demanda</span>
               <a href=""><img src="img/boton_descarga_cyan.png" alt="" /></a>
            </div>
         </div>
         <div class="fechas">
            <h5>Fecha de inicio: <br />
               <span class="resultado">06/09/19</span>
            </h5>
            <h5>Fecha de entrega: <br />
               <span class="resultado">12/09/19</span>
            </h5>
         </div>
         <div class="miembros">
            <h5>Miembros del grupo</h5>
            <ul>
               <li>
                  <img src="img/usuario.png" alt="" />
                  <span>Apellido Nombre</span>
               </li>
               <li>
                  <img src="img/usuario.png" alt="" />
                  <span>Apellido Nombre</span>
               </li>
               <li>
                  <img src="img/usuario.png" alt="" />
                  <span>Apellido Nombre</span>
               </li>
               <li>
                  <img src="img/usuario.png" alt="" />
                  <span>Apellido Nombre</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div id="componentes">
      <div class="wrapper">
         <h3>Componentes</h3>
         <div class="componentes-inner col-mob-1">
            <ul>
               <li class="ficha-componente" id="cuno">
                  <div class="azul">
                     <h4>Componentes #1</h4>
                  </div>
                  <div class="cuerpo-azul">
                     <div class="compon">
                        <img src="img/usuario.png" alt="" />
                        <span class="titulo">Nombre_del_componente.jpg</span>
                        <span class="mb">15 mb</span>
                     </div>
                     <div class="compon">
                        <img src="img/usuario.png" alt="" />
                        <span class="titulo">Nombre_del_componente.jpg</span>
                        <span class="mb">15 mb</span>
                     </div>
                     <div class="compon">
                        <img src="img/usuario.png" alt="" />
                        <span class="titulo">Nombre_del_componente.jpg</span>
                        <span class="mb">15 mb</span>
                     </div>

                  </div>
               </li>
               <li class="ficha-componente ficha-componente-azul">
                  <span class="tag evaluado">REALIZADA</span>
                  <span>Autoevaluación</span>
                  <a href="est-evaluacion">VER AUTOEVALUACIÓN</a>
               </li>
            </ul>
         </div>
         <div class="componentes-inner col-mob-1">
            <ul>
               <li class="ficha-componente" id="cdos">
                  <div class="azul">
                     <h4>Componentes #2</h4>
                  </div>
                  <div class="cuerpo-azul">
                     <a class="link" href="">https://mifadu.mybluemix.net/assignments/www.google.com</a>
                  </div>
               </li>
               <li class="ficha-componente" id="ctres">
                  <div class="azul">
                     <h4>Componentes #3</h4>
                  </div>
                  <div class="cuerpo-azul">
                     <div class="compon">
                        <img src="img/usuario.png" alt="" />
                        <span class="titulo">Nombre_del_componente.pdf</span>
                        <span class="mb">15 mb</span>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</main>
@endsection