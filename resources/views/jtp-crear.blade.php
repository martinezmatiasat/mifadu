@extends("layouts.jtp")

@section("banner")
<div class="banner-celeste">
   <div class="wrapper">
      <a href="jtp-perfil"><img class="marg-r-10" src="img/boton_volver_blanco.png" alt="flecha blanca" />Volver al
         inicio</a>
      <h2 class="titular-grande">Crear nuevo trabajo práctico</h2>
   </div>
</div>
@endsection

@section("content")
<main class="contenido crear-tp">
   <div class="wrapper">
      <form action="jtp-crear/crear-tp" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div>
            <label for="">N&uacute;mero del TP</label>
            <input type="number" name="numero" required>
         </div>
         <div>
            <label for="">Nombre del TP</label>
            <input type="text" name="nombre" required>
         </div>
         <div>
            <label for="">Descripci&oacute;n corta</label>
            <input type="text" name="descripcion_corta" placeholder="En una oración, describí tu nuevo TP" required>
         </div>
         <div>
            <label for="">Descripci&oacute;n</label>
            <textarea name="descripcion"
               placeholder="Escribe una descripción más extensa para tu nuevo Trabajo Práctico. No es consigna."
               required></textarea>
         </div>
         <div class="subir-archivin">
            <label for="" class="label-consigna">Consigna</label>
            <label for="subir-archivo" class="subir-archivo">SUBIR CONSIGNA</label>
            <input type="file" name="archivo_consigna" id="subir-archivo">
         </div>
         <div>
            <label for="">Fecha de entrega</label>
            <input type="date" name="fecha_entrega" required>
         </div>
         <div>
            <label for="">Etiquetas (Tags)</label>
            <input type="text" name="etiquetas" placeholder="Separadas por una ',' (coma), etiquetas para la búsqueda">
         </div>
         <div>
            <label for="">Componentes de entrega</label>
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="pdf" value="">Archivos PDF <br>
            </div>
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="img" value="">Archivos JPG, PNG, GIF <br>
            </div>
            <div class="chequis">
               <input class="checkbox1" type="checkbox" name="link" value="">Links externos <br>
            </div>
         </div>
         <div class="variables">
            <label for="">Variables de evaluación</label>
            <input type="text" name="var1" placeholder="Escribe la variable #1">
            <input type="text" name="var2" placeholder="Escribe la variable #2">
            <input type="text" name="var3" placeholder="Escribe la variable #3">
            <input type="text" name="var4" placeholder="Escribe la variable #4">
            <input type="text" name="var5" placeholder="Escribe la variable #5">
         </div>
         <div class="indiv-grup">
            <label for="">¿El TP es individual o grupal?</label>
            <ul>
               <li>
                  <input type="radio" id="f-option" name="grupal" required>
                  <label for="f-option">Individual</label>
                  <div class="check"></div>
               </li>
               <li>
                  <input type="radio" id="s-option" name="grupal" required checked>
                  <label for="s-option">Grupal</label>
                  <div class="check">
                     <div class="inside"></div>
                  </div>
               </li>
            </ul>
         </div>
         <div id="estado">
            <div>
               <a class="form-boton-cancelar" href="jtp-perfil">CANCELAR CARGA</a>
               <button class="form-boton" type="submit">CREAR TP</button>
            </div>
         </div>
      </form>
   </div>
</main>
@endsection