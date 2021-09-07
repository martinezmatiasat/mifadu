@extends('layouts.layout')

@section('body')
   <body id="inicio">
      <div class="inicio-modal modal">
         <div class="inner">
            <div class="inicio-header">
               <h1><img src="img/logo.png" alt="Logo MiFADU"></h1>
               <span class="bienvenidos">Bienvenidxs</span>
            </div>
            <div>
               <h2>Inicio de Sesión</h2>
               <form class="form-inicio" action="{{ route('login') }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="icon-mail" name="email" type="email" placeholder="Email" required>
                  <input class="icon-pass" name="password" type="password" placeholder="Contraseña" required>
                  <a href="{{ route('recuperar') }}">No recuerdo mi clave</a>
                  <button class="form-boton" type="submit">INCIAR SESIÓN</button>
               </form>
            </div>
            <!--
            <div class="iniciar-con">
               <span>O iniciá sesión con</span>
               <a class="google" href="#"></a>
               <a class="facebook" href="#"></a>
            </div>
            -->
            <span class="recu">¿No tenés cuenta?<a href="{{ route('est-registro') }}"> Registrate</a></span>
         </div>
      </div>
      <script src="js/js.js" type="text/javascript"></script>
      <script>
         $('.relleno').remove();
      </script>
   </body>
@endsection
