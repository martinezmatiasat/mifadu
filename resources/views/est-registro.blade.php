@extends('layouts.layout')

@section('body')

   <body id="registro">
      <div class="inicio-modal modal">
         <div class="inner">
            <div class="inicio-header">
               <div class="col4">
                  <h1><img src="img/logo.png" alt="Logo MiFADU"></h1>
                  <span class="bienvenidos">Bienvenidxs</span>
               </div>
               <div class="col4">
                  <h2>Registro</h2>
               </div>
            </div>
            <div>
               <form class="form-inicio" action="est-registro/registrar" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="flex">
                     <div class="col4 col-mob-1">
                        <input name="nombre" type="text" placeholder="Nombre" required>
                        <input name="email" class="icon-mail" type="email" placeholder="Mail" required>
                        <input name="contrasena" class="icon-pass" type="password" placeholder="Contraseña" required>
                        <input name="dni" type="text" placeholder="DNI" required>
                     </div>
                     <div class="col4 col-mob-1">
                        <input name="apellido" type="text" placeholder="Apellido" required>
                        <input name="celular" class="icon-cel" type="tel" placeholder="Celular" required>
                        <input name="contrasena2" class="icon-pass" type="password" placeholder="Confirmar contraseña"
                           required>
                        <input name="nacimiento" type="date" placeholder="DD/MM/AAAA" required>
                     </div>
                  </div>
                  <div class="selectines flex">
                     <div>
                        <span>Materias cursadas</span>
                        <select class="marg icon-flecha-abajo">
                           <option value="1">Proyectual</option>
                           <option value="2">Morfolog&iacute;a</option>
                           <option value="3">Ambas</option>
                        </select>
                     </div>
                     <div>
                        <span>Taller al que perteneces</span>
                        <select name="taller" id="select-taller" class="marg icon-flecha-abajo">
                           @forelse ($talleres as $t)
                              <option value="{{ $t->id }}">{{ $t->nombre }}</option>
                           @empty
                              <option></option>
                           @endforelse
                        </select>
                     </div>
                     <div>
                        <span>Comisi&oacute;n</span>
                        <select name="comision" id="select-comision" class="marg icon-flecha-abajo">
                           @forelse ($comisiones as $c)
                              <option value="{{ $c->id }}">Comisi&oacute;n {{ $c->id }}</option>
                           @empty
                              <option></option>
                           @endforelse
                        </select>
                     </div>
                  </div>
                  <div class="yacurse">
                     <div class="checks">
                        <div class="chequis">
                           <input class="checkbox1" type="checkbox" name="exalumno">Ya cursé en Rondina en un año
                           anterior<br>
                        </div>
                     </div>
                     <div class="reflexiones">
                        <label for="">Contanos algo de vos</label>
                        <textarea name="sobre_mi" rows="" cols="" placeholder=""></textarea>
                     </div>
                     <div class="terminos flex">
                        <div class="checks">
                           <div class="chequis">
                              <input class="checkbox1" type="checkbox" required>Acepto términos y
                              condiciones<br>
                           </div>
                        </div>
                        <div>
                           <span class="recu">¿Ya tenés cuenta? <a href="jtp-inicio-sesion"> Inicia Sesión</a></span>
                        </div>
                     </div>
                  </div>
                  <button class="form-boton" type="submit">REGISTRARSE</button>
               </form>
            </div>
         </div>
      </div>
      <script src="js/js.js" type="text/javascript"></script>
      <script>
         $('#select-taller').on('change', function(e) {
            $('#select-comision').empty();
            $.ajax({
               url: "get-comisiones/" + $(e.target).val() + "/",
            }).done(function(response) {
               for (const res of response) {
                  $('#select-comision').append("<option value='" + res.id + "'>Comisi&oacute;n " + res.id + "</option>");
               }
            }).fail(function() {
               console.log("error get-comisiones");
            })
         });
      </script>
      <script>
         $('.relleno').remove();
      </script>
   </body>
@endsection
