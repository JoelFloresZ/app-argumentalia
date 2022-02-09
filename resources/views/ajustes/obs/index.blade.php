@extends('layouts.dashboard')

@section('title')
Configuración de IP
@endsection

@section('content')
<div class="container-fluid">
    <div class="con d-flex justify-content-between align-items-center">
        <h4>Configuración de IP para conectarse a OBS externo</h4>
       
    </div>

    <hr>

    <x-alert-message />

     <div class="shadow p-4 mb-5 bg-body rounded card">
        <label for="ip_local">Dirección IP Local</label>
        <form class="w-50 d-flex align-content-end align-items-lg-start" action="{{  isset($config[0])  ? route('config.obs.update.local', $config[0]->id) : route('config.obs.post.local') }}" method="post">
            @csrf
            @isset($config[0])
                @method('PUT')
            @endisset

            <div class="me-1">
                <input type="text" class="form-control me-1  @error('ip_local') is-invalid @enderror" placeholder="Ejemplo: 192.168.0.1" name="ip_local" id="ip_local" value="{{ isset($config[0]) ? $config[0]->ip : old('ip') }}"  required>
                @error('ip_local')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary ml-1">{{ isset($config[0]) ? 'Actualizar' : 'Registrar'}}</button>
        </form>

    </div>

   {{-- Lista de datos  --}}
    <div class="shadow p-4 mb-5 bg-body rounded card">
        <label for="ip">Dirección IP Remota</label>
        <form class="w-50 d-flex align-content-end align-items-lg-start" action="{{  isset($config[1])  ? route('config.obs.update.remote', $config[1]->id) : route('config.obs.post.remota') }}" method="post">
            @csrf
            @isset($config[1])
                @method('PUT')
            @endisset

            <div class="me-1">
                <input type="text" class="form-control me-1  @error('ip_remota') is-invalid @enderror" placeholder="Ejemplo: 192.168.0.1" name="ip_remota" id="ip" value="{{ isset($config[1])  ? $config[1]->ip : old('ip_remota') }}"  required>
                @error('ip_remota')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary ml-1">{{ isset($config[1]) ? 'Actualizar' : 'Registrar'}}</button>
        </form>

    </div>
    
</div>
@endsection
