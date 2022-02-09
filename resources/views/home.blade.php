@extends('layouts.dashboard')

@section('title')
   Inicio
@endsection

@section('content')
<div class="container">
    {{-- info user --}}
   <div class="bg-white shadow p-3 rounded d-flex justify-content-between align-items-center">
      <section>
         <h4>Bienvenido: {{ Auth::user()->name }}</h2>
      </section>

      <section>
         <h4 class="fs-6 text-dark-50">Tipo de usuario: <b>{{ Auth::user()->tipoUsuario->tipo }}</b></h2>
      </section>
   </div>

   {{-- Audiencias --}}
   <div class="row mt-3">
      <div class="col-6 mb-4">
         <div class="bg-white shadow p-3 rounded">
            <h5>
               <svg xmlns="http://www.w3.org/2000/svg" class="h4" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1z" fill="currentColor"/></svg>
               Audiencias programadas del día de hoy</h5>
            <hr>
            @if (count($audienciasAgendadasHoy) > 0)
               <ul class="mt-3 list-group-items">
                  @foreach ($audienciasAgendadasHoy as $audiencia)
                     <li> {{ $audiencia->tipoAudiencia->nombre }} - {{ $audiencia->expediente->numero_expediente }} - Hora de inicio: <b>{{  $audiencia->horaInicio }}</b> </li>
                  @endforeach
               </ul>
            @else
               <h3 class="fs-5 my-4">No hay audiencias programadas para el día de hoy</h3>   
            @endif
         </div>
      </div>

      {{-- Audiencias celebrandose  --}}
      <div class="col-6 mb-4">

         <div class="bg-white shadow p-3 rounded">
            <h5>
               <svg xmlns="http://www.w3.org/2000/svg" class="h4" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1z" fill="currentColor"/></svg>
               Audiencias celebrándose</h5>
            <hr>

            @if (count($audienciasCelebrandoseHoy) > 0)
               <ul class="mt-3 list-group-items">
                  @foreach ($audienciasCelebrandoseHoy as $audiencia)
                     <li> {{ $audiencia->tipoAudiencia->nombre }} - {{ $audiencia->expediente->numero_expediente }} - Hora de inicio: <b>{{  $audiencia->horaInicio }}</b> </li>
                  @endforeach
               </ul>
            @else
               <h3 class="fs-5 my-4">No hay audiencias celebrándose en este momento</h3>   
            @endif
           
         </div>
      </div>

      {{-- Audiencias finalizadas  --}}
      <div class="col-6 mb-4">

         <div class="bg-white shadow p-3 rounded">
            <h5>
               <svg xmlns="http://www.w3.org/2000/svg" class="h4" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1z" fill="currentColor"/></svg>
               Audiencias finalizadas del día de hoy</h5>
            <hr>

            @if (count($audienciasFinalizadasHoy) > 0)
               <ul class="mt-3 list-group-items">
                  @foreach ($audienciasFinalizadasHoy as $audiencia)
                     <li> {{ $audiencia->tipoAudiencia->nombre }} - {{ $audiencia->expediente->numero_expediente }} - Hora de inicio: <b>{{  $audiencia->horaInicio }}</b> </li>
                  @endforeach
               </ul>
            @else
               <h3 class="fs-5 my-4">No hay audiencias finalizadas para mostrar</h3>   
            @endif
           
         </div>

      </div>
   </div>
@endsection
