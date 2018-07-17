@extends('layouts.app')
@section('tittle', ' - Perfil de usuario')
@section('content')
<div class="col-lg-8">
    <div class="user-info-list card">
        <div class="card-header card-header-divider">Perfil de usuario</div>
        <div class="card-body">
        <table class="no-border no-strip skills">
          <tbody class="no-border-x no-border-y">
            <tr>
              <td class="icon"><span class="mdi mdi-case"></span></td>
              <td class="item">Nombre<span class="icon s7-portfolio"></span></td>
              <td>{{ $user->first_name}}</td>
            </tr>
            <tr>
              <td class="icon"><span class="mdi mdi-cake"></span></td>
              <td class="item">Apellido<span class="icon s7-gift"></span></td>
              <td>{{ $user->last_name}}</td>
            </tr>
            <tr>
              <td class="icon"><span class="mdi mdi-smartphone-android"></span></td>
              <td class="item">Email<span class="icon s7-phone"></span></td>
              <td>{{ $user->email}}</td>
            </tr>
            <tr>
              <td class="icon"><span class="mdi mdi-globe-alt"></span></td>
              <td class="item">Status<span class="icon s7-map-marker"></span></td>
              <td>@if($user->active === 1) <span class="badge badge-primary">Activo</span> @else <span class="badge badge-danger">Inactivo</span> @endif </td>
            </tr>
            <tr>
              <td class="icon"><span class="mdi mdi-pin"></span></td>
              <td class="item">Tipo de usuario<span class="icon s7-global"></span></td>
              <td>{{ $user->type}}</td>
            </tr>
          </tbody>
        </table>
        </div>
    </div>
</div>
@endsection