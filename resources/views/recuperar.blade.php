@extends('layouts.layout')

@section('body')
<body id="recuperar">
   <div class="recuperar-modal modal">
      <div class="inner">
         <div class="inicio-header">
            <h1><img src="img/logo.png" alt="Logo MiFADU"></h1>
         </div>
         <div>
            <h2>Recuperar Clave</h2>
            <form class="form form-recuperar" action="-inicio-sesion">
               <input type="email" class="icon-mail" required placeholder="Ingrese su mail para recuperar la clave">
               <div>
                  <a class="form-boton-cancelar" href="jtp-inicio-sesion">CANCELAR</a>
                  <button class="form-boton" type="submit">RECUPERAR</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <script src="js/js.js" type="text/javascript"></script>
   <script>
      $('.relleno').remove();
   </script>
</body>
@endsection