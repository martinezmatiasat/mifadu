@extends('layouts.est')

@section('banner')
   <div class="banner-violeta">
      <div class="wrapper">
         <a href="est-perfil"><img class="marg-r-10" src="{{ url('img/boton_volver_blanco.png') }}" alt="flecha blanca" />Volver a
            trabajos prácticos en curso</a>
         <h2 class="titular-grande">Entrega: Tp #1 | Nombre del Trabajo práctico</h2>
      </div>
   </div>
@endsection

@section('content')
   <main class="contenido crear-tp">
      <div class="wrapper">
         <div class="contenido">
            <h3>Información general del TP</h3>
         </div>
         <form action="{{ route('crear-entrega', $consigna->id) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div style="position:relative;">
               <label for="">Miembros del equipo</label>
               <input class="padi-tag" type="text" name="miembros" placeholder="Separados por una ',' (coma)" required>
               <div class="negro-at"><img src="{{ url('img/icon_@.png') }}" alt="" /></div>
            </div>
            <div>
               <label for="">Etiquetas</label>
               <input type="text" value="" data-role="tagsinput" name="etiquetas" placeholder="Separadas por una ',' (coma)">
            </div>
            <div class="indiv-grup">
               <label for="">¿El TP es público o privado?</label>
               <span>Eleg&iacute; privado si quer&eacute;s que tu Trabajo Pr&aacute;ctico no aparezca en las
                  b&uacute;squedas de otros usuarios.</span>
               <ul>
                  <li>
                     <input type="radio" id="f-option" name="selector" checked>
                     <label for="f-option">Público</label>
                     <div class="check"></div>
                  </li>
                  <li>
                     <input type="radio" id="s-option" name="selector">
                     <label for="s-option">Privado</label>
                     <div class="check">
                        <div class="inside"></div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="cargar">
               <label for="">Elige una portada para tu TP</label>
               <span>Cargá una imagen que ilustre tu entrega.</span>
               <div class="drag">
                  <div class="leyenda">
                     <span class="falso-btn">Elegí archivos </span>
                     <span class="file-msg">o arrastrá hasta acá los archivos que quieras subir</span>
                     <img src="{{ url('img/cloud.png') }}" alt="" />
                  </div>
                  <input class="file-input" type="file" name="portada" multiple>
               </div>
            </div>
            <div id="componentes" class="crear-componentes">
               <div class="wrapper">
                  <h3>Componentes</h3>
                  <div class="componentes-inner col-mob-1">
                     <ul>
                        <li class="ficha-componente" id="cuno">
                           <div class="azul">
                              <h4 class="inline-block">Componente #1</h4>
                              <span class="tam-max">tamaño max: 5mb</span>
                           </div>
                           <div class="cuerpo-azul">
                              <div class="cargar" style="margin-top: 40px !important;">
                                 <div class="drag">
                                    <div class="leyenda">
                                       <span class="falso-btn">Elegí archivos </span>
                                       <span class="file-msg">o arrastrá hasta acá los archivos que quieras subir</span>
                                       <img src="{{ url('img/cloud.png') }}" alt="" />
                                    </div>
                                    <input class="file-input" type="file" name="archivo1" multiple>
                                 </div>
                              </div>
                              <div class="compon">
                                 <img src="{{ url('img/usuario.png') }}" alt="" />
                                 <span class="titulo">Nombre_del_componente.jpg</span>
                                 <span class="mb mb2">15 mb</span>
                                 <a class="tachin" href=""><img src="{{ url('img/boton_cesto_gris.png') }}" alt="Eliminar" /></a>
                              </div>
                           </div>
                        </li>
                        <li class="ficha-componente" id="cdos">
                           <div class="azul">
                              <h4 class="inline-block">Componente #2</h4>
                              <span class="tam-max">tamaño max: 5mb</span>
                           </div>
                           <div class="cuerpo-azul">
                              <div class="cargar" style="margin-top: 40px !important;">
                                 <div class="drag">
                                    <div class="leyenda">
                                       <span class="falso-btn">Elegí archivos </span>
                                       <span class="file-msg">o arrastrá hasta acá los archivos que quieras subir</span>
                                       <img src="{{ url('img/cloud.png') }}" alt="" />
                                    </div>
                                    <input class="file-input" type="file" name="archivo2" multiple>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="componentes-inner col-mob-1">
                     <ul>
                        <li class="ficha-componente" id="ctres">
                           <div class="azul">
                              <h4 class="inline-block">Componente #3</h4>
                              <span class="tam-max">tamaño max: 5mb</span>
                           </div>
                           <div class="cuerpo-azul">
                              <div class="cargar" style="margin-top: 40px !important;">
                                 <div class="drag">
                                    <div class="leyenda">
                                       <span class="falso-btn">Elegí archivos </span>
                                       <span class="file-msg">o arrastrá hasta acá los archivos que quieras subir</span>
                                       <img src="{{ url('img/cloud.png') }}" alt="" />
                                    </div>
                                    <input class="file-input" type="file" name="archivo3" multiple>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="ficha-componente ficha-componente-azul">
                           <span class="tag no-evaluado">PENDIENTE</span>
                           <span>Autoevaluación</span>
                           <a class="due" href="">REALIZAR AUTOEVALUACIÓN</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div id="estado" class="col-mob-1">
               <input type="submit">
               <!--
               <div>
                  <a class="form-boton-cancelar" id="modalCancelar" href="">CANCELAR CARGA</a>
                  <button class="form-boton" id="modalPublicar" type="submit">PUBLICAR ENTREGA</button>
               </div>
            -->
            </div>
         </form>
      </div>
   </main>
@endsection
