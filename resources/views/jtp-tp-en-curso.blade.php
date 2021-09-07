@extends("layouts.jtp")

@section("banner")
<div class="banner-azul2">
   <div class="wrapper">
      <h2 class="titular-grande">Trabajo práctico en curso</h2>
   </div>
</div>
@endsection

@section("content")
<main class="contenido">
   <div class="wrapper">
      <div class="cabezal">
         <span>Materia: Diseño 3</span>
         <span>Año <span>2019</span></span>
      </div>
      <h4 style="display:inline; margin-right: 60px;">TP Nº 1 Nombre completo del tp</h4>
      <div class="inline-block col-mob-1">
         <a style="margin-right: 15px;" class="boton-celeste2" href="jtp-crear">EDITAR</a>
         <a class="boton-rojo2 elimi" href="jtp-perfil">ELIMINAR</a>
      </div>

      <div class="tp-en-curso">
         <div class="fechas">
            <h5>Inicio: 06/09/19</h5>
            <h5>Entrega: 12/12/19</h5>
         </div>
         <div class="tp-inner col-mob-1">
            <div class="descripcion">
               <span class="titulo18">Descripción del ejercicio</span>
               <p class="texto-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus, velit
                  sed pharetra porttitor, enim velit hendrerit eros, sed scelerisque lacus neque id nisl. Sed luctus
                  ornare ligula. Sed eget libero vel ipsum dictum dictum in sed enim. Sed facilisis eleifend porta.
                  Morbi mollis nibh sit amet orci consequat, non iaculis orci luctus. Donec vehicula tortor quis
                  augue tempus, nec malesuada nisi luctus. Maecenas nibh odio, tincidunt nec tincidunt in, euismod
                  quis arcu. Etiam tincidunt urna at nisl dignissim euismod. Aenean egestas nunc non odio rutrum, vel
                  porttitor sapien tincidunt.</p>
            </div>
            <div class="demanda">
               <span class="titulo18">Demanda del ejercicio</span>
               <a href=""><img src="img/boton_descarga_cyan.png" alt="" /></a>
            </div>
            <div class="eventos">
               <span class="titulo18">Eventos</span>
               <a class="boton-celeste" href="">CREAR EVENTO</a>
               <p class="text-regular">Todavía no tiene eventos creados para este TP</p>
            </div>
         </div>
         <div class="tp-inner2 mob-mar-top-40 col-mob-1">
            <div>
               <span class="titulo18">Variables de evaluación</span>
               <span class="texto-regular">#1 Variable nombre</span>
               <span class="texto-regular">#2 Variable nombre</span>
               <span class="texto-regular">#3 Variable nombre</span>
               <span class="texto-regular">#4 Variable nombre</span>
            </div>
            <div>
               <span class="titulo18">Modalidad del TP</span>
               <span class="texto-regular">grupal</span>

            </div>
         </div>
      </div>
   </div>
</main>
@endsection