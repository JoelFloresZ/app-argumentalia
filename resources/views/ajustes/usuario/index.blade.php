@extends('layouts.dashboard')

@section('title')
    Usuarios
@endsection

@section('content')
<div class="container-fluid">
    <div class="con d-flex justify-content-between align-items-center">
        <h4> Control de usuarios para el sistema </h4>
        <div>
            <a class="btn btn-outline-primary btn-sm me-3" href="{{ route('roles.usuarios') }}">Listado de roles de administración</a>
            <a class="btn btn-primary btn-sm" href="{{ route('create.usuario') }}">Agregar nuevo usuario</a>
        </div>
    </div>

    <hr>

    {{-- Lista de datos  --}}
    <x-alert-message />   


    <div class="shadow p-3 mb-5 bg-body rounded card">
        @if (count($usuarios) > 0)
            <table class="table table-hover">
                <thead class="table-primary">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Tipo de usuario</th>
                    <th scope="col">Avatar</th>
                    <th class="text-center" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->tipoUsuario->tipo }}</td>
                            <td>
                               {{--  <img width="40px" class="rounded-circle" style="background-image: url('')" alt=""> --}}
                                <div class="avatar" style="background-image: url({{ asset(Storage::url($usuario->avatar)) }})"></div>
                            </td>
                            <td>
                                <div class="text-center d-flex justify-content-end">
                                    <a class="btn btn-sm btn-light rounded-circle d-flex justify-content-center align-items-center p-1 me-2" href="{{ route('edit.usuario', encrypt($usuario->id)) }}" title="Editar"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h4 m-0" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M7 17.013l4.413-.015l9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583l-1.597 1.582l-1.586-1.585l1.594-1.58zM9 13.417l6.03-5.973l1.586 1.586l-6.029 5.971L9 15.006v-1.589z" fill="currentColor"/><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z" fill="currentColor"/></svg>
                                    </a>

                                    {{-- Si el usuarios es un administrador principal desactivamos la opcion de eleiminar --}}
                                    @if ($usuario->id !== 1)
                                        <form class="ml-2" action="{{route('delete.usuario', $usuario->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-light rounded-circle d-flex justify-content-center align-items-center p-1" type="submit" 
                                            onclick="return confirm('¿Estas seguro de eliminar: {{$usuario->name}}?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h4 m-0" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M360 184h-8c4.4 0 8-3.6 8-8v8h304v-8c0 4.4 3.6 8 8 8h-8v72h72v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80h72v-72zm504 72H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM731.3 840H292.7l-24.2-512h487l-24.2 512z" fill="currentColor"/></svg>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                               
                            </td>
                        </tr>       
                    @endforeach              
                </tbody>
            </table>     

            <div>
                {{-- {{ $juicios->links() }} --}}  
            </div> 
        @else
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="fs-5">No hay usuarios registrados todavía</h3>
            </div>
        @endif
    </div>
   
   
</div>
@endsection
