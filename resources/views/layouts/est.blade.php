@extends('layouts.layout')

@section('body')

   <body id="estudiante">

      <div class="menu-mobile">
         <div class="topnav">
            <a href="#home"><img style="width:80px;" src="{{ url('img/logo.png') }}" alt="Logo MiFADU"></a>
            <div id="myLinks">
               <a href="{{ route('est-perfil') }}">Inicio</a>
               <a href="">TP en curso</a>
               <a href="{{ route('est-tp-entregados-lista') }}">TP entregados</a>
               <a href="{{ route('logout') }}">
                  <div class="usuario">
                     <div class="notif-pendiente"></div>
                     <img src="{{ url('img/usuario.png') }}" alt="" />
                     <span>Laura</span>
                  </div>
               </a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
               <i class="fa fa-bars"></i>
            </a>
         </div>
      </div>

      <header>
         <div class="wrapper">
            <nav class="nav-perfil-jtp nav">
               <div class="logo">
                  <h1><img src="{{ url('img/logo.png') }}" alt="Logo MiFADU"></h1>
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="{{ route('est-perfil') }}">Inicio</a></li>
                     <li><a href="">TP en curso</a></li>
                     <li><a href="{{ route('est-tp-entregados-lista') }}">TP entregados</a></li>
                  </ul>
               </div>
               <div class="buscador">
                  <form action="est-resultado-busqueda" method="POST">
                     <input type="text" placeholder="Buscar..." name="buscar">
                     <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
               <div class="usuario">
                  <a href="{{ route('logout') }}">
                     <div class="notif-pendiente"></div>
                     <img src="{{ url('img/usuario.png') }}" alt="">
                     <span>William</span>
                  </a>
               </div>
            </nav>
         </div>
      </header>

      @yield("banner")
      @include('flash-message')
      @yield("content")

      <footer>
         <div class="wrapper">
            <div>
               <ul>
                  <li style="margin-right: 20px;">
                     <p>Cátedra Rondina</p>
                  </li>
                  <li>
                     <a href="#">
                        <img src="{{ url('img/footer_redes_facebook.png') }}" alt="facebook" />
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <img src="{{ url('img/footer_redes_instagram.png') }}" alt="Instagram" />
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <img src="{{ url('img/footer_redes_youtube.png') }}" alt="Youtube" />
                     </a>
                  </li>
               </ul>
               <a class="tutoriales" href="#">Tutoriales</a>
            </div>
            <div>
               <ul>
                  <li><img src="{{ url('img/footer_copyright.png') }}" alt="" /></li>
                  <li>
                     <p>MiFadu</p>
                  </li>
               </ul>
            </div>
         </div>
      </footer>

      <script src="{{ url('js/js.js') }}" type="text/javascript"></script>
      @yield("scripts")

   </body>
@endsection
