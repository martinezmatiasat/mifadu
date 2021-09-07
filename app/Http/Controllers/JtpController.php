<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Consigna;
use App\Models\EtiquetaConsigna;
use App\Models\Variable;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class JtpController extends Controller
{
   public function index()
   {
      $estudiantes = [];
      $consignas = [];
      try {
         $estudiantes = Estudiante::where('comision_id', '=', 1)->get();
         $consignas = Consigna::where('fecha_entrega', '>', date('Y-m-d'))->get();
      } catch (QueryException $e) {
         return $e->getMessage();
      }
      $data = compact('estudiantes', 'consignas');
      return view("jtp-perfil", $data);
   }

   public function tpEnCurso($cid)
   {

      return view("jtp-tp-en-curso");
   }

   public function tpEntregadosLista()
   {
      return view("jtp-tp-entregados-lista");
   }

   public function tpEntregadosMosaico()
   {
      return view("jtp-tp-entregados-mosaico");
   }

   public function comisiones()
   {
      return view("jtp-comisiones");
   }

   public function crear()
   {
      return view("jtp-crear");
   }

   public function crearTp(Request $req)
   {
      if ($req->missing(['nombre', 'numero', 'descripcion'])) {
         $req->session()->flash('error', 'Faltan datos');
      } else {
         $ec = explode(',', $req->input('etiquetas'));
         $result = false;
         $arch = null;

         if ($req->file('archivo_consigna')) {
            $ext = $req->file('archivo_consigna')->extension();
            $arch = time() . ".$ext";
         }

         try {
            $result = Consigna::create([
               'numero' => $req->input('numero'),
               'nombre' => $req->input('nombre'),
               'descripcion_corta' => $req->input('descripcion_corta'),
               'descripcion' => $req->input('descripcion'),
               'archivo_consigna' => $arch,
               'fecha_entrega' => $req->input('fecha_entrega'),
               'pdf' => $req->input('pdf') ? 1 : 0,
               'img' => $req->input('img') ? 1 : 0,
               'link' => $req->input('link') ? 1 : 0,
               'grupal' => $req->input('grupal') ? 1 : 0
            ]);

            foreach ($ec as $ec) {
               EtiquetaConsigna::create([
                  'nombre' => $ec,
                  'consigna_id' => $result->id
               ]);
            }

            for ($i = 0; $i < 5; $i++) {
               if ($req->input("var$i")) Variable::create([
                  'nombre' => $req->input("var$i"),
                  'consigna_id' => $result->id
               ]);
            }
         } catch (QueryException $e) {
            return $e->getMessage();
            $req->session()->flash('error', "Disculpe, no se pudo guardar informaci&oacute;n");
         }

         if ($result) {
            if ($arch) $req->file('archivo_consigna')->storeAs('public', $arch);
            $req->session()->flash('success', "Datos guardados con &eacute;xito");
         } else {
            $req->session()->flash('error', "Disculpe, no se pudo guardar el archivo");
         }
      }

      return redirect('jtp-tp-en-curso');
   }

   public function miembros()
   {
      return view("jtp-miembros");
   }

   public function perfilEstudiante()
   {
      return view("jtp-perfil-estudiante");
   }

   public function tpSinEvaluar()
   {
      return view("jtp-tp-sin-evaluar");
   }

   public function tpEvaluado()
   {
      return view("jtp-tp-evaluado");
   }

   public function evaluacion()
   {
      return view("jtp-evaluacion");
   }

   public function evaluarTp()
   {
      return view("jtp-evaluar-tp");
   }

   public function resultadoBusqueda()
   {
      return view("jtp-resultado-busqueda");
   }
}
