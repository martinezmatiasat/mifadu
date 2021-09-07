@extends("layouts.jtp")

@section('banner')
   <div class="banner">
      <div class="wrapper">
         <h2>Hola {{ isset($nombre) ? $nombre : 'invitado' }}, esta es tu actividad reciente</h2>
      </div>
   </div>
@endsection

@section('content')
   <main class="contenido">
      <div class="wrapper">
         <h3>Diseño 3 &nbsp;&nbsp; 2019</h3>
         <div>
            <div class="columna1">
               @forelse ($consignas as $c)
                  <div class="ficha trabajo-activo">
                     <div class="ficha-inner">
                        <h4>TP en curso</h4>
                        <a class="boton-tab todos" href="jtp-tp-en-curso/{{$c->id}}">VER TP</a>
                        <span class="tp-activo">TP Nº{{$c->numero}}- {{$c->nombre}}</span>
                        <h5>Fecha de entrega {{$c->fecha_entrega}}</h5>
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
               <div class="ficha trabajos-practicos">
                  <div class="ficha-inner">
                     <h4>TP sin evaluar <span class="num">(9)</span></h4>
                     <a class="boton-tab todos" href="jtp-tp-entregados-lista">VER TODOS</a>
                     <div id="sinevaluar" class="tabcontenido">
                        <ul>
                           <li>
                              <p>TP1 - Nombre y Apellido</p>
                              <a class="boton-tab" href="#">EVALUAR</a>
                           </li>
                           <li>
                              <p>TP1 - Nombre y Apellido</p>
                              <a class="boton-tab" href="#">EVALUAR</a>
                           </li>
                           <li>
                              <p>TP1 - Nombre y Apellido</p>
                              <a class="boton-tab" href="#">EVALUAR</a>
                           </li>
                           <li>
                              <p>TP1 - Nombre y Apellido</p>
                              <a class="boton-tab" href="#">EVALUAR</a>
                           </li>
                        </ul>
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
               </div>
               <div class="ficha nuevo-tp">
                  <div class="ficha-inner">
                     <span class="tp-activo">Crear nuevo trabajo práctico</span>
                     <a class="crear" href="jtp-crear">CREAR</a>
                  </div>
               </div>
            </div>
            <div class="columna2">
               <div class="ficha alumnos">
                  <div class="ficha-inner">
                     <h4>Miembros del taller: <span class="num">36</span></h4>
                     <a class="boton-tab" href="jtp-miembros">VER TODOS</a>
                     <table>
                        <tr height="25" class="header-table">
                           <th>Nombre <img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo" />
                           </th>
                           <th>Rol <img class="marg-l-5" src="img/boton_flecha_abajo_negra.png" alt="flecha abajo" /></th>
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
                           <li class="flecha"><a href=""><img src="img/flecha-izquierda.png" alt="" /></a></li>
                           <li><a class="activo-pag" href="">1</a></li>
                           <li><a href="">2</a></li>
                           <li><a href="">3</a></li>
                           <li class="flecha"><a href=""><img src="img/flecha-derecha.png" alt="" /></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
