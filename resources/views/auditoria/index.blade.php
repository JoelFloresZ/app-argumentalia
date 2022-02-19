@extends('layouts.dashboardVideo')

@section('title')
    Audiencia en celebración
@endsection

@section('video')
<div class="container-fluid">

   <div class="mb-2 mt-1 px-4 py-2 border bg-white rounded">
      <section class=mb-1">
        <b class="fs-6 text-uppercase">{{$expediente->audiencia->centroJusticia->nombre }} - {{$expediente->audiencia->tipoAudiencia->nombre }} </b>
      </section>

      <section class="d-flex justify-content-between">
         <p>Número de expediente: <b> {{ $expediente->numero_expediente }} </b></p>
         <section class="d-flex">
            <p class="me-3">Hora de inicio: {{ $expediente->audiencia->horaInicio }} </p>
            <p>Hora a finalizar: {{ $expediente->audiencia->horaFinalizar }} </p>
         </section>
      </section>
   </div>

   <div class="d-flex bd-highlight">
      {{-- Navigation --}}
      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
         <button class="nav-link active" id="v-pills-audiencia-tab" data-bs-toggle="pill" data-bs-target="#v-pills-audiencia" type="button" role="tab" aria-controls="v-pills-audiencia" aria-selected="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
            </svg>
            <br/>
            Audiencia
         </button>

         <button class="nav-link" id="v-pills-asistencia-tab" data-bs-toggle="pill" data-bs-target="#v-pills-asistencia" type="button" role="tab" aria-controls="v-pills-asistencia" aria-selected="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
               <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
               <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
             </svg>
            <br>Asistencia
         </button>

         <button class="nav-link" id="v-pills-notas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-notas" type="button" role="tab" aria-controls="v-pills-notas" aria-selected="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-sticky-fill" viewBox="0 0 16 16">
               <path d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1h-11zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177V9.5z"/>
             </svg>
            <br>Notas
         </button>
         
         <button class="nav-link" id="v-pills-archivos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-archivos" type="button" role="tab" aria-controls="v-pills-archivos" aria-selected="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-file-earmark-zip-fill" viewBox="0 0 16 16">
               <path d="M5.5 9.438V8.5h1v.938a1 1 0 0 0 .03.243l.4 1.598-.93.62-.93-.62.4-1.598a1 1 0 0 0 .03-.243z"/>
               <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-4-.5V2h-1V1H6v1h1v1H6v1h1v1H6v1h1v1H5.5V6h-1V5h1V4h-1V3h1zm0 4.5h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V8.5a1 1 0 0 1 1-1z"/>
             </svg>
            <br>Archivos
         </button>
         
         <div>
            <analisis-disc-local />
         </div>

         <a href="{{ route('salir.evento',$expediente->audiencia->id ) }}" class="nav-link text-center mt-4"
            onclick="return confirm('¿Estas seguro de salir de la audiencia?')" title="Salir de la audiencia">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
               <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
             </svg>
            <br>Salir
         </a>
        
      </div>

      <div class="w-100 tab-content bg-white p-2 shadow" id="v-pills-tabContent">
         {{-- Videograbacion --}}
         <div class="w-full tab-pane fade show active" id="v-pills-audiencia" role="tabpanel" aria-labelledby="v-pills-audiencia-tab">

            <div>
               
               <input type="text" name="numero_de_expediente" id="numero_de_expediente" value="{{ $expediente->numero_expediente }}" hidden>
               <input type="text" id="fechaCelebracion" value="{{ $expediente->audiencia->fechaCelebracion }}" hidden>
               
               <video-recording-obs />
               
            </div>         
         </div>

         {{-- asistencia --}}
         <div class="tab-pane fade" id="v-pills-asistencia" role="tabpanel" aria-labelledby="v-pills-asistencia-tab">

            <x-sala.table-asistencia :participantes="$expediente->audiencia->participantes" :audienciaid="$expediente->audiencia->id" />

         </div>

         {{-- Notas --}}
         <div class="tab-pane fade" id="v-pills-notas" role="tabpanel" aria-labelledby="v-pills-notas-tab">
            <x-sala.form-nota :participantes="$expediente->audiencia->participantes" :audienciaid="$expediente->id"/>
         </div>

         {{-- Archivos --}}
         <div class="tab-pane fade" id="v-pills-archivos" role="tabpanel" aria-labelledby="v-pills-archivos-tab">
            <x-sala.form-file :participantes="$expediente->audiencia->participantes" :audienciaid="$expediente->id"/>
         </div>

      </div>
   </div>
</div>
@endsection

@section('js')
     
    
@endsection

