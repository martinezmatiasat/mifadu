@extends("layouts.jtp")

@section("banner")
<div class="banner-blanco">
   <div class="wrapper">
      <a href="jtp-tp-entregados-lista"><img class="marg-r-10" src="img/boton_volver_azul.png"
            alt="flecha azul" />Volver a trabajos prácticos entregados </a>
   </div>
</div>
<div class="subnav">
   <div class="wrapper">
      <ul>
         <li>
            <a href="#caracteristicas">Características del TP</a>
         </li>
         <li>
            <a href="#componentes">Componentes de entrega</a>
         </li>
         <li>
            <a href="#autoev">Autoevaluación del estudiante</a>
         </li>
      </ul>
   </div>
</div>
<div class="banner-foto">
</div>
@endsection

@section("content")
<main class="contenido tp-sin-evaluar">
   <div class="wrapper">
      <div class="cabezal">
         <span>Materia: Diseño 3</span>
         <span>Año <span>2019</span></span>
         <span>Comisión: <span>Nicky y Martio</span></span>
         <span class="tag no-evaluado">SIN EVALUAR</span>

      </div>
      <div class="col4 col-mob-1 inline-block">
         <h4 style="display:inline; margin-right: 60px;">Tp #1 | Nombre del Trabajo práctico</h4>
      </div>
      <span class="sin-rojo">Sin evaluar</span>
      <a style="margin-right: 15px; vertical-align:super;" class="boton-celeste2" href="jtp-evaluar-tp">EVALUAR</a>
      <a class="boton-rojo2 elimi" style="vertical-align:super;" href="jtp-tp-entregados-lista">ELIMINAR</a>
      <div class="linea1">
         <div class="tags col-mob-1">
            <span class="titulo">Etiquetas</span>
            <span class="etiquetas">MATERIALES</span>
            <span class="etiquetas">MATERIALES</span>
            <span class="etiquetas">MATERIALES</span>
         </div>
         <div class="variable col-mob-1">
            <span class="titulo">Variable de evaluación: </span>
            <span class="resultado">Test</span>
         </div>
         <div class="tipo col-mob-1">
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
         <div class="fechas col-mob-1">
            <h5>Fecha de inicio: <br />
               <span class="resultado">06/09/19</span>
            </h5>
            <h5>Fecha de entrega: <br />
               <span class="resultado">12/09/19</span>
            </h5>
         </div>
         <div class="miembros col-mob-1">
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
   <div id="autoev">
      <div class="wrapper">
         <h3>Autoevaluación</h3>

         <div class="grupo">
            <ul>
               <li class="tablinks" onclick="TabPractico(event, 'primero')">
                  <img src="img/usuario.png" alt="usuario" />
                  <span>Apellido Nombre</span>
               </li>
               <li class="tablinks" onclick="TabPractico(event, 'segundo')">
                  <img src="img/usuario.png" alt="usuario" />
                  <span>Apellido Nombre</span>
               </li>
               <li class="tablinks" onclick="TabPractico(event, 'tercero')">
                  <img src="img/usuario.png" alt="usuario" />
                  <span>Apellido Nombre</span>
               </li>
            </ul>
         </div>

         <!--div class="tab">
				<div class="tab-activo">
					<button class="tablinks active" onclick="TabPractico(event, 'evento')">Evento #1</button>
				</div>
				<div>	
					<button class="tablinks" onclick="TabPractico(event, 'autoevaluacion')">Autoevaluación</button>
				</div>	
				<div>	
					<button class="tablinks" onclick="TabPractico(event, 'evaluacionfinal')">Evaluación final</button>
				</div>	
				<div>	
					<button class="tablinks" onclick="TabPractico(event, 'promedio')">Promedio</button>
				</div>	
			</div-->

         <div class="primero">
            <div id="primero" class="tabcontenido">
               primero
            </div>
         </div>

         <div class="segundo">
            <div style="display:none;" id="segundo" class="tabcontenido">
               segundo
            </div>
         </div>

         <div class="tercero">
            <div style="display:none;" id="tercero" class="tabcontenido">
               tercero
            </div>
         </div>

         <div class="reflexion col-mob-1">
            <span>Reflexiones del estudiante sobre el TP</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, lorem nec porta pulvinar, dolor
               metus gravida lorem, in varius augue lacus ut ligula. Morbi vel eleifend turpis. Donec hendrerit lacus
               ex, sed tristique ligula cursus in. Nunc ipsum eros, commodo nec sem sit amet, congue laoreet urna.
               Mauris eu commodo lacus. Nullam feugiat, libero in imperdiet sodales, tellus libero viverra nunc, at
               dapibus elit dolor eu lorem.</p>
         </div>
      </div>
   </div>

   <div class="evaluar">
      <div class="wrapper">
         <span>Evaluar trabajo práctico</span>
         <a href="jtp-evaluar-tp">EVALUAR</a>
      </div>
   </div>
   <div class="celeste">
      <a href="jtp-tp-entregados-lista">VOLVER A TP ENTREGADOS</a>
      <a href="jtp-tp-sin-evaluar">SIGUIENTE TP SIN EVALUAR</a>
   </div>
</main>
@endsection