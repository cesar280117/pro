<?php

use Illuminate\Support\Facades\Route;


//iniciar sessión para las empresas y administradores del sistema
Route::livewire('/', 'login.login')->layout('livewire.login.app')->name('login');
//iniciar sesion para los empleados de la empresa
Route::livewire('/login/empleados', 'login.empleado')->layout('livewire.login.app')->name('login.empleados');

Route::group(['middleware' => ['auth:sucursales,empresas']], function () {

    Route::livewire('/inicio', 'inicio.index')->name('inicio');
    //componente para CRUD empleados de la empresa o sucursal 
    Route::livewire('/empleados', 'empleados.index')->name('empleados.index');
    Route::livewire('/empleados/create', 'empleados.create')->name('empleados.create');
    Route::livewire('/empleados/{id}', 'empleados.show')->name('empleados.show');
    Route::livewire('/empleados/{id}/confirmar', 'empleados.confirmar')->name('empleados.confirmar');
    Route::livewire('/empleados/{id}/edit', 'empleados.edit')->name('empleados.edit');


    //controlador del livewire para el CRUD de jornadas laborales
    Route::livewire('/jornadas', 'jornadas.index')->name('jornadas.index');
    Route::livewire('/jornadas/create', 'jornadas.create')->name('jornadas.create');
    Route::livewire('/jornadas/{id}', 'jornadas.show')->name('jornadas.show');
    Route::livewire('/jornadas/{id}/confirmar', 'jornadas.confirmar')->name('jornadas.confirmar');
    Route::livewire('/jornadas/{id}/edit', 'jornadas.edit')->name('jornadas.edit');


    //controlador para modificar y mostrar la datos personal de la empresa
    Route::livewire('/empresas/datos/{id}/edit', 'empresas.edit-datos')->name('empresas.update-datos');
    Route::livewire('/empresas/datos/{id}/show', 'empresas.show')->name('empresas.show-datos');

    //controlador para ver las sucursales de la empresa y realizar diversas aacciones.
    Route::livewire('/sucursales', 'sucursales.index')->name('sucursales.index');
    Route::livewire('/sucursales/datos/{id}/show', 'sucursales.show')->name('sucursales.show-datos');
    Route::livewire('/sucursales/datos/{id}/edit', 'sucursales.edit-datos')->name('sucursales.edit-datos');
});


//ruta para mostrar las sucursales y la empreza matriz para el cambio tapido de sesion
Route::livewire('/login/seleccion', 'login.seleccion')->middleware('auth:empresas')->layout('livewire.login.app')->name('login.seleccion');

//Seccion de administradores del sistema.
Route::group(['middleware' => 'auth'], function () {

    Route::livewire('inicio/usuarios', 'inicio.index')->layout('layouts.admin')->name('inicio-admin');
    //controlador del livewire para el CRUD de registro de empresas administrativos.
    Route::livewire('empresas', 'empresas.index')->layout('layouts.admin')->name('empresas.index');
    Route::livewire('empresas/create', 'empresas.create')->layout('layouts.admin')->name('empresas.create');
    Route::livewire('empresas/{id}/', 'empresas.show')->layout('layouts.admin')->name('empresas.show');
    Route::livewire('empresas/{id}/edit', 'empresas.edit')->layout('layouts.admin')->name('empresas.edit');
    Route::livewire('empresas/{id}/confirmar', 'empresas.confirm')->layout('layouts.admin')->name('empresas.confirm');

    //controlador del livewire para el CRUD de registro de sucursales administrativos.
    Route::livewire('sucursales/{id}/create', 'sucursales.create')->layout('layouts.admin')->name('sucursales.create');
    Route::livewire('sucursales/{id}', 'sucursales.show')->layout('layouts.admin')->name('sucursales.show');
    Route::livewire('sucursales/{id}/edit', 'sucursales.edit')->layout('layouts.admin')->name('sucursales.edit');
    Route::livewire('sucursales/{id}/confirmar', 'sucursales.confirmar')->layout('layouts.admin')->name('sucursales.confirmar');

    //controlador del livewire para el CRUD de registro de usuarios administrativos.
    Route::livewire('usuarios', 'usuarios.index')->layout('layouts.admin')->name('usuarios.index');
    Route::livewire('usuarios/create', 'usuarios.create')->layout('layouts.admin')->name('usuarios.create');
    Route::livewire('usuarios/{id}', 'usuarios.show')->layout('layouts.admin')->name('usuarios.show');
    Route::livewire('usuarios/{id}/edit', 'usuarios.edit')->layout('layouts.admin')->name('usuarios.edit');
    Route::livewire('usuarios/{id}/confirmar', 'usuarios.confirm')->layout('layouts.admin')->name('usuarios.confirm');
});


//seccion de empleados de la empresa

Route::group(['middleware' => 'auth:empleados'], function () {
    Route::livewire('/inicio/empleados', 'empleados-portal.inicio')->name('empleados-portal.inicio');
    Route::livewire('/empleados/portal/datos', 'empleados-portal.datos')->name('empleados-portal.datos');
    Route::livewire('/empleados/portal/guias', 'empleados-portal.guias')->name('empleados-portal.guias');

   
});
Route::group(['middleware' => ['auth:empresas,empleados,sucursales']], function () {
     //controlador para la guia numero 1
     Route::livewire('/guias/No1', 'guias.no1')->name('guias.no1');
     //controlador para la guia numero 2
     Route::livewire('/guias/No2', 'guias.no2')->name('guias.no2');
     //controlador para la guia numero 3
     Route::livewire('/guias/No3', 'guias.no3')->name('guias.no3');

});
