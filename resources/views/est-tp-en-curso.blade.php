@extends('layouts.est')

@section('banner')
   <div class="banner-azul2">
      <div class="wrapper">
         <h2 class="titular-grande">Trabajo práctico en curso</h2>
      </div>
   </div>
@endsection

@section('content')
   <main class="contenido est-tp-curso">
      <div class="wrapper">
         <div class="cabezal">
            <span>Materia: {{ $materia->nombre }}</span>
            <span>Año: <span>{{ date('Y') }}</span></span>
            <span>Comisi&oacute;n: <span>{{ $comision->id }}</span></span>
         </div>
         <h4 style="display:inline; margin-right: 60px;">TP {{ $consigna->numero }} - {{ $consigna->nombre }}</h4>
         <div class="tp-en-curso">
            <div class="tp-inner col-mob-1">
               <div class="descripcion col-mob-1">
                  <span class="titulo18">Descripción del ejercicio</span>
                  <p class="texto-regular">{{ $consigna->descripcion }}.</p>
               </div>
               <div class="demanda col-mob-1">
                  <span class="titulo18">Consigna del ejercicio</span>
                  <a href=""><img src="{{ url('img/boton_descarga_cyan.png') }}" alt="Descargar" /></a>
               </div>
            </div>
            <div class="tp-inner2 col-mob-1">
               <div>
                  <span class="titulo18">Variables de evaluación</span>
                  @forelse ($variables as $v)
                     <span class="texto-regular">- {{ $v->nombre }}</span>
                  @empty
                     <span class="texto-regular">-</span>
                  @endforelse
               </div>
               <div>
                  <span class="titulo18">Modalidad del TP</span>
                  <span class="texto-regular">{{ $consigna->grupal == 1 ? 'Grupal' : 'Individual' }}</span>
               </div>
               <div class="linea2 col-mob-1">
                  <div class="miembros">
                     <h5>Miembros del grupo</h5>
                     <ul>
                        @forelse ($estudiantes as $e)
                           <li>
                              <img src="{{ url('img/usuario.png') }}" alt="" />
                              <span>{{ $e->nombre }} {{ $e->apellido }}</span>
                           </li>
                        @empty
                           <li>
                              <span>-</span>
                           </li>
                        @endforelse
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col2 tp-inner3 col-mob-1">
               <div class="ficha-est-entrega">
                  <span class="tex">Fecha de inicio: <span
                        class="fechass">{{ substr($consigna->created_at, 0, 10) }}</span></span>
                  <span class="tex">Fecha de entrega: <span
                        class="fechass">{{ $consigna->fecha_entrega }}</span></span>
                  <a class="boton-azul" href="{{ route('est-crear', $consigna->id) }}">ENTREGAR</a>
               </div>
               <div class="ficha-est-entrega ficha-est-evento">
                  <span class="tex">Próximo evento: <span class="fechass">-</span></span>
                  <span class="tex">Evaluación entre pares. </span>
                  <a class="boton-azul" href="">SUMARSE AL EVENTO</a>
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
