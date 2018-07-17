@extends('layouts.app')
@section('tittle', ' - Usuarios')
@section('content')
<div class="col-lg-10">
    <h1 class="bd-title" id="content">{{ $tittle }}</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <th scope="rtr">{{ $user->id }}</th>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>@if($user->active === 1) <span class="badge badge-primary">Activo</span> @else <span class="badge badge-danger">Inactivo</span> @endif </td>
                <td>{{ $user->type }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Acci&oacute;n
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href='javascript:;' onclick='swal({
                                    title: "&iquest;Est&aacute; seguro?",
                                    text: "El registro ser&aacute; eliminado. &iquest;Desea continuar?",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Eliminar",
                                    closeOnConfirm: false }, function(){
                                        location.href="{{ route('user.destroy', $user->id) }}"
                                    });'>Eliminar
                                </a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @empty
            <li>No hay usuarios registrados</li>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
