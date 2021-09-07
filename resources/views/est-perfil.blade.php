@extends('layouts.est')

@section('banner')
   <div class="banner banner-est">
      <div class="wrapper">
         <h2>Hola <span>William</span>, esta es tu actividad reciente</h2>
      </div>
   </div>
@endsection

@section('content')
   <main class="contenido">
      <div class="wrapper">
         <h3>{{ $taller->nombre }} &nbsp;|&nbsp; {{ date('Y') }}</h3>
         <div>
            <div class="columna1 col-mob-1">
               @forelse ($consignas as $c)
                  <div class="ficha trabajo-activo">
                     <div class="ficha-inner">
                        <h4>TP en curso</h4>
                        <a class="boton-tab todos" href="{{ route('est-tp-en-curso', $c->id) }}">VER TP</a>
                        <span class="tp-activo">Tp en curso Nº{{ $c->numero }}- {{ $c->nombre }}</span>
                        <h5>Fecha de entrega {{ $c->fecha_entrega }}</h5>
                     </div>
                  </div>
               @empty
                  <div class="ficha trabajo-activo">
                     <div class="ficha-inner">
                        <h4>TP en curso</h4>
                        <span class="tp-activo">No hay Tps en curso</span>
                     </div>
                  </div>
               @endforelse
            </div>
            <div class="columna2 col-mob-1">
               <div class="ficha alumnos">
                  <div class="ficha-inner">
                     <h4>Miembros del taller: <span class="num">36</span></h4>
                     <a class="boton-tab todos" href="{{ route('est-miembros') }}">VER TODOS</a>
                     <table>
                        <tr height="25" class="header-table">
                           <th>Nombre<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo"></th>
                           <th>Rol<img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo" /></th>
                        </tr>
                        @if (empty($docentes) && empty($estudiantes))
                           <tr class="campos">
                              <td>No hay informaci&oacute;n para mostrar</td>
                              <td></td>
                           </tr>
                        @else
                           @if (isset($docentes))
                              @foreach ($docentes as $d)
                                 <tr class="campos">
                                    <td><img src="img/alumno.png" alt="Docente" />{{ $d->nombre }} {{ $d->apellido }}
                                    </td>
                                    <td>Docente</td>
                                 </tr>
                              @endforeach
                           @endif
                           @if (isset($estudiantes))
                              @foreach ($estudiantes as $e)
                                 <tr class="campos">
                                    <td><img src="img/alumno.png" alt="Docente" />{{ $e->nombre }} {{ $e->apellido }}
                                    </td>
                                    <td>Estudiante</td>
                                 </tr>
                              @endforeach
                           @endif
                        @endif
                     </table>
                     <div class="paginador">
                        <ul>
                           <li class="flecha"><i class="fa fa-chevron-left"></i></li>
                           <li><a class="activo-pag" href="">1</a></li>
                           <li><a href="">2</a></li>
                           <li><a href="">3</a></li>
                           <li class="flecha"><i class="fa fa-chevron-right"></i></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col2 ficha-prox col-mob-1">
               <div class="ficha-violeta">
                  <span class="tit">Próxima entrega</span>
                  @if (isset($consignas))
                     <span class="tex">Tp {{ $consignas[0]->numero }}. {{ $consignas[0]->nombre }}</span>
                     <span class="tex">{{ $consignas[0]->fecha_entrega }}</span>
                  @else
                     <span class="tex">No hay tps a entregar</span>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
