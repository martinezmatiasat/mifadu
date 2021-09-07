<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Docente;
use App\Models\Taller;
use App\Models\Comision;
use App\Models\ComisionDocente;
use App\Models\Consigna;
use App\Models\Estudiante;
use App\Models\Entrega;
use App\Models\EntregaEstudiante;
use App\Models\EtiquetaEntrega;
use App\Models\Componente;
use App\Models\Materia;
use App\Models\Variable;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class EstController extends Controller
{
   public function index()
   {
      if (empty(session('estudiante'))) return redirect('inicio-sesion');

      $docentes = [];
      $estudiantes = [];
      $taller = null;
      $consignas = [];

      try {
         $taller = DB::table('comisiones')->select()->where('id', session('estudiante')['comision_id'])->first();
         $taller = Taller::where('id', $taller->id)->first();
         $comisiones = DB::table('comisiones')->select('id')->where('taller_id', $taller->id)->get();
         $cids = [];
         foreach ($comisiones as $c) $cids[] = $c->id;
         $estudiantes = Estudiante::whereIn('comision_id', $cids)->get();
         $com_docs = ComisionDocente::whereIn('comision_id', $cids)->get();
         $dids = [];
         foreach ($com_docs as $cd) $dids[] = $cd->docente_id;
         $docentes = Docente::whereIn('id', $dids)->get();
         $consignas = Consigna::where('fecha_entrega', '>', date('Y-m-d'))->get();
      } catch (QueryException $e) {
         return $e->getMessage();
      }

      return view("est-perfil", compact('taller', 'docentes', 'estudiantes', 'consignas'));
   }

   public function registro()
   {
      $talleres = [];
      try {
         $talleres = Taller::all();
         $comisiones = self::getComisiones($talleres[0]->id);
      } catch (QueryException $e) {
         return $e->getMessage();
      }
      return view("est-registro", compact('talleres', 'comisiones'));
   }

   public static function getComisiones($taller_id)
   {
      $comisiones = [];
      try {
         $comisiones = Comision::where('taller_id', $taller_id)->get();
      } catch (QueryException $e) {
         return $e->getMessage();
      }
      return $comisiones;
   }

   public function registrar(Request $req)
   {
      if ($req->missing(['nombre', 'email', 'contrasena'])) {
         $req->session()->flash('error', 'Faltan datos obligatorios');
      } elseif ($req->input('contrasena') != $req->input('contrasena2')) {
         $req->session()->flash('error', "Las contrase&ntilde;as no coinciden");
      } else {
         try {
            Estudiante::create([
               'nombre' => $req->input('nombre'),
               'apellido' => $req->input('apellido'),
               'email' => $req->input('email'),
               'clave' => $req->input('contrasena'),
               'celular' => $req->input('celular'),
               'dni' => $req->input('dni'),
               'fecha_nacimiento' => $req->input('nacimiento'),
               'comision_id' => $req->input('comision'),
               'exalumno' => $req->input('exalumno') ? 1 : 0,
               'sobre_mi' => $req->input('sobre_mi'),
               'imagen' => $req->input('imagen')
            ]);
            $req->session()->flash('success', "Datos guardados con &eacute;xito");
         } catch (QueryException $e) {
            //return $e->getMessage();
            $req->session()->flash('error', "Disculpe, no se pudo guardar informaci&oacute;n");
         }
      }
      return redirect('est-perfil');
   }

   public function crear($cid)
   {
      $consigna = Consigna::where('id', '=', $cid)->first();
      return view("est-crear", compact('consigna'));
   }

   public function crearEntrega($cid, Request $req)
   {
      if ($req->missing(['miembros'])) {
         $req->session()->flash('error', 'Faltan datos obligatorios');
      } else {
         try {
            $ent_est = explode(',', $req->input('miembros'));
            if (!empty($req->input('etiquetas'))) $et_ent = explode(',', $req->input('etiquetas'));
            $result = false;
            $portada = null;
            $componentes = [];
            /*
            $arch1 = null;
            $arch2 = null;
            $arch3 = null;
            */

            if ($req->file('portada')) {
               $ext = $req->file('portada')->extension();
               $portada = time() . ".$ext";
            }

            $entrega = [
               'consigna_id' => $cid,
               'privado' => $req->input('selector'),
               'arch_portada' => $portada,
               'docente_eval_id' => null,
               'nota' => null,
               'promediar' => null,
               'reflexion_eval' => null
            ];

            return array_merge($entrega, $ent_est, $et_ent);

            $result = Entrega::create($entrega);

            foreach ($ent_est as $ee) {
               EntregaEstudiante::create([
                  'entrega_id' => $result->id,
                  'estudiante' => $ee
               ]);
            }

            foreach ($et_ent as $ee) {
               EtiquetaEntrega::create([
                  'nombre' => $ee,
                  'entrega_id' => $result->id
               ]);
            }

            for ($i=0; $i < 3; $i++) { 
               if ($req->file("archivo$i")) {
                  Componente::create([
                     'entrega_id' => $result->id,
                     'tipo' => $req->file("archivo$i")->extension(),
                     'archivo' => time() . '.' . $req->file("archivo$i")->extension()
                  ]);
               }
            }
            
            /*
            if ($req->file('archivo2')) {
               Componente::create([
                     'entrega_id' => $result->id,
                     'tipo' => $req->file("archivo2")->extension(),
                     'archivo' => time() . '.' . $req->file("archivo2")->extension()
                  ]);
            }
            if ($req->file('archivo3')) {
               Componente::create([
                     'entrega_id' => $result->id,
                     'tipo' => $req->file("archivo3")->extension(),
                     'archivo' => time() . '.' . $req->file("archivo3")->extension()
                  ]);
            }
            */

            foreach ($componentes as $c) {
               Componente::create([]);
            }
         } catch (QueryException $e) {
            $req->session()->flash('error', $e->getMessage());
         }
      }
      //return $req->all();
      //return $req->file('portada')->extension();
      //return $req->file('archivo1')->extension();
      return $req->file('archivo2')->extension();
      return $req->file('archivo3')->extension();
   }

   public function editarPerfilEstudiante()
   {
      return view("est-editar-perfil-estudiante");
   }

   public function evaluacion()
   {
      return view("est-evaluacion");
   }

   public function miembros()
   {
      return view("est-miembros");
   }

   public function perfilEstudiante()
   {
      return view("est-perfil-estudiante");
   }

   public function resultadoBusqueda()
   {
      return view("est-resultado-busqueda");
   }

   public function tpEnCurso($cid)
   {
      $consigna = $comision = $taller = $materia = null;
      $docentes = $estudiantes = $variables = [];

      try {
         $consigna = Consigna::where('id', $cid)->first();
         $comision = Comision::where('id', session('estudiante')['comision_id'])->first();
         $taller = Taller::where('id', $comision->taller_id)->first();
         $materia = Materia::where('id', $taller->materia_id)->first();
         $variables = Variable::where('consigna_id', $cid)->get();
         $entrega = Entrega::where('consigna_id', $cid)->first();
         if ($entrega != null) {
            $ent_est = EntregaEstudiante::where('entrega_id', $entrega->id)->get();
            $eids = [];
            foreach ($ent_est as $ee) {
               $eids = $ee->estudiante_id;
            }
            $estudiantes = Estudiante::whereIn('id', $eids)->get();
         }
      } catch (QueryException $e) {
         return $e->getMessage();
      }

      $vac = [
         'consigna',
         'comision',
         'taller',
         'materia',
         'docentes',
         'estudiantes',
         'variables',
         'entrega'
      ];
      return view("est-tp-en-curso", compact($vac));
   }

   public function tpEntregadosLista()
   {
      return view("est-tp-entregados-lista");
   }

   public function tpEntregadosMosaico()
   {
      return view("est-tp-entregados-mosaico");
   }

   public function tpEvaluado()
   {
      return view("est-tp-evaluado");
   }

   public function inicioSesion(Request $req)
   {
      if (session('estudiante') != null) return redirect('est-perfil');
      elseif (session('docente') != null) return redirect('jtp-perfil');

      return view("inicio-sesion");
   }

   public function logIn(Request $req)
   {
      if ($req->session()->has('eid')) return redirect('est-perfil');
      elseif ($req->session()->has('did')) return redirect('jtp-perfil');

      $u = null;
      $to = null;
      $param = [];

      if ($u = Estudiante::where('email', $req->input('email'))->first()) {
         $req->session()->regenerate();
         $req->session()->put('estudiante', $u->attributesToArray());
         $to = 'est-perfil';
      } elseif ($u = Docente::where('email', $req->input('email'))->first()) {
         $req->session()->regenerate();
         $req->session()->put('docente', $u->attributesToArray());
         $to = 'jtp-perfil';
      } else {
         $req->session()->flash('error', "Identificaci&oacute;n incorrecta");
         $to = 'inicio-sesion';
      }
      return redirect()->route($to, $param);
   }

   public function logOut(Request $req)
   {
      if ($req->session()->missing('estudiante') && $req->session()->missing('docente')) return redirect('inicio-sesion');

      $req->session()->flush();
      $req->session()->regenerate();
      return redirect('inicio-sesion');
   }
}
