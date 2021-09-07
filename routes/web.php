<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JtpController;
use App\Http\Controllers\EstController;

Route::get('/', [EstController::class, 'inicioSesion']);

Route::get('/inicio-sesion', [EstController::class, 'inicioSesion'])->name('inicio-sesion');

Route::post('/inicio-sesion/login', [EstController::class, 'logIn'])->name('login');

Route::get('/inicio-sesion/logout', [EstController::class, 'logOut'])->name('logout');

Route::get('/recuperar', function () {
   return view("recuperar");
})->name('recuperar');

Route::get('get-comisiones/{taller_id}', [EstController::class, 'getComisiones'])->name('get-comisiones');

Route::get('/jtp-perfil', [JtpController::class, 'index'])->name('jtp-perfil');

Route::get('/jtp-tp-en-curso/{cid}', [JtpController::class, 'tpEnCurso'])->name('jtp-tp-en-curso');

Route::get('/jtp-tp-entregados-lista', [JtpController::class, 'tpEntregadosLista'])->name('jtp-tp-entregados-lista');

Route::get('/jtp-tp-entregados-mosaico', [JtpController::class, 'tpEntregadosMosaico'])->name('jtp-tp-entregados-mosaico');

Route::get('/jtp-comisiones', [JtpController::class, 'comisiones'])->name('jtp-comisiones');

Route::get('/jtp-crear', [JtpController::class, 'crear'])->name('jtp-crear');

Route::post('/jtp-crear/crear-tp', [JtpController::class, 'crearTp'])->name('crear-tp');

Route::get('/jtp-miembros', [JtpController::class, 'miembros'])->name('jtp-miembros');

Route::get('/jtp-perfil-estudiante', [JtpController::class, 'perfilEstudiante'])->name('jtp-perfil-estudiante');

Route::get('/jtp-tp-sin-evaluar', [JtpController::class, 'tpSinEvaluar'])->name('jtp-tp-sin-evaluar');

Route::get('/jtp-tp-evaluado', [JtpController::class, 'tpEvaluado'])->name('jtp-tp-evaluado');

Route::get('/jtp-evaluacion', [JtpController::class, 'evaluacion'])->name('jtp-evaluacion');

Route::get('/jtp-evaluar-tp', [JtpController::class, 'evaluarTp'])->name('jtp-evaluar-tp');

Route::get('/jtp-resultado-busqueda', [JtpController::class, 'resultadoBusqueda'])->name('jtp-resultado-busqueda');

Route::get('/est-perfil', [EstController::class, 'index'])->name('est-perfil');

Route::get('/est-registro', [EstController::class, 'registro'])->name('est-registro');

Route::post('/est-registro/registrar', [EstController::class, 'registrar'])->name('registrar');

Route::get('/est-crear/{cid}', [EstController::class, 'crear'])->name('est-crear');

Route::post('/est-crear/crear-entrega/{cid}', [EstController::class, 'crearEntrega'])->name('crear-entrega');

Route::get('/est-editar-perfil-estudiante', [EstController::class, 'editarPerfilEstudiante'])->name('est-editar-perfil-estudiante');

Route::get('/est-evaluacion', [EstController::class, 'evaluacion'])->name('est-evaluacion');

Route::get('/est-miembros', [EstController::class, 'miembros'])->name('est-miembros');

Route::get('/est-perfil-estudiante', [EstController::class, 'perfilEstudiante'])->name('est-perfil-estudiante');

Route::get('/est-resultado-busqueda', [EstController::class, 'resultadoBusqueda'])->name('est-resultado-busqueda');

Route::get('/est-tp-en-curso/{cid}', [EstController::class, 'tpEnCurso'])->name('est-tp-en-curso');

Route::get('/est-tp-entregados-lista', [EstController::class, 'tpEntregadosLista'])->name('est-tp-entregados-lista');

Route::get('/est-tp-entregados-mosaico', [EstController::class, 'tpEntregadosMosaico'])->name('est-tp-entregados-mosaico');

Route::get('/est-tp-evaluado', [EstController::class, 'tpEvaluado'])->name('est-tp-evaluado');
