<div class="vh-100 px-2 overflow-scroll">
    <ul class="list-unstyled ps-0">

        <li class="mb-1 mt-4" >
            <div class="mb-3 d-flex justify-content-center">
                <div class="avatar" style="background-image: url({{ asset(Storage::url(Auth::user()->avatar)) }})"></div>
            </div>
            <p class=" text-center w-100"> {{ Auth::user()->name }}</p>
        </li>

        <li class="mb-1" >
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li>
                    <a href="{{ route('home') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path d="M12 5.561l-7 5.6V19h5v-4h4v4h5v-7.358a1 1 0 0 0-.375-.781L12 5.561zM12 3l7.874 6.3A3 3 0 0 1 21 11.641V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7.839A2 2 0 0 1 3.75 9.6L12 3z" fill="currentColor" fill-rule="nonzero"/>
                        </svg>
                        Inicio
                    </a>
                </li>
            </ul>
        </li>

        {{-- Auditoria --}}
        @if (Auth::user()->tipoUsuario->permiso->ver_auditoria || Auth::user()->tipoUsuario->permiso->ver_lista_auditoria )
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded text-light collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                    Audiencia
                </button>
                <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-2 small">
                    @if (Auth::user()->tipoUsuario->permiso->ver_auditoria)
                        <li>
                            <a href="{{ route('ingresar.evento') }}" class="link-light rounded d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path d="M1 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H1zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4zM21.548.784A13.942 13.942 0 0 1 23 7c0 2.233-.523 4.344-1.452 6.216l-1.645-1.196A11.955 11.955 0 0 0 21 7a11.96 11.96 0 0 0-1.097-5.02L21.548.784zm-3.302 2.4A9.97 9.97 0 0 1 19 7a9.97 9.97 0 0 1-.754 3.816l-1.677-1.22A7.99 7.99 0 0 0 17 7a7.99 7.99 0 0 0-.43-2.596l1.676-1.22z" fill="currentColor"/>
                                </svg>
                                Ingresar Audiencia
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->tipoUsuario->permiso->ver_lista_auditoria)
                        <li>
                            <a href="{{ route('auditoria.lista') }}" class="link-light rounded d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <g class="icon-tabler" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 5H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5.697"/><path d="M18 12V7a2 2 0 0 0-2-2h-2"/><rect x="8" y="3" width="6" height="4" rx="2"/><path d="M8 11h4"/><path d="M8 15h3"/><circle cx="16.5" cy="17.5" r="2.5"/><path d="M18.5 19.5L21 22"/></g>
                                </svg>
                                Reporte
                            </a>
                        </li>
                    @endif
                </ul>
                </div>
            </li>
        @endif

        <li class="border-top my-3"></li>

        @if (Auth::user()->tipoUsuario->permiso->ver_reservar)
            <li class="mb-1 me-2" >
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="{{ route('book.new.room') }}" class="link-light rounded d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <g fill="none"><path d="M21 17.75A3.25 3.25 0 0 1 17.75 21H6.25A3.25 3.25 0 0 1 3 17.75V6.25A3.25 3.25 0 0 1 6.25 3h11.5A3.25 3.25 0 0 1 21 6.25v11.5zm-1.5 0V6.25a1.75 1.75 0 0 0-1.75-1.75H6.25A1.75 1.75 0 0 0 4.5 6.25v11.5c0 .966.784 1.75 1.75 1.75h11.5a1.75 1.75 0 0 0 1.75-1.75zm-2.5-10a.75.75 0 0 1-.648.743l-.102.007h-8.5a.75.75 0 0 1-.102-1.493L7.75 7h8.5a.75.75 0 0 1 .75.75zm0 8.5a.75.75 0 0 1-.648.743L16.25 17h-8.5a.75.75 0 0 1-.102-1.493l.102-.007h8.5a.75.75 0 0 1 .75.75zM17 12a.75.75 0 0 1-.648.743l-.102.007h-8.5a.75.75 0 0 1-.102-1.493l.102-.007h8.5A.75.75 0 0 1 17 12z" fill="currentColor"/></g>
                            </svg>
                            Agendar audiencia
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        {{-- Buscar expediente --}}
        @if (Auth::user()->tipoUsuario->permiso->ver_buscar)
        <li class="mb-1" >
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li>
                    <a  href="{{ route('buscar.expediente') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                            <path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1c-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z" fill="currentColor"/>
                        </svg>
                        Buscar audiencia
                    </a>
                </li>
            </ul>
        </li>
        @endif

        {{-- Administración --}}
        @if (Auth::user()->tipoUsuario->permiso->ver_admin)
        <li class="mb-1" >
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li>
                    <a href="{{ route('lista.audiencias') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path d="M21.706 5.291l-2.999-2.998A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.291A.994.994 0 0 0 2 5.999V19c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5.999a.994.994 0 0 0-.294-.708zM6.414 4h11.172l.999.999H5.415L6.414 4zM4 19V6.999h16L20.002 19H4z" fill="currentColor"/><path d="M15 12H9v-2H7v4h10v-4h-2z" fill="currentColor"/>
                        </svg>
                        Administración
                    </a>
                </li>
            </ul>
        </li>
        @endif

        {{-- Agenda --}}
        @if (Auth::user()->tipoUsuario->permiso->ver_agenda)
        <li class="mb-1" >
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li>
                    <a href="{{ route('agenda') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1z" fill="currentColor"/>
                        </svg>
                        Agenda
                    </a>
                </li>
            </ul>
        </li>
        @endif

        {{-- Analisis --}}
        @if (Auth::user()->tipoUsuario->permiso->ver_estadistica)
        <li class="mb-1" >
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li>
                    <a href="{{ route('analisis.index') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <g class="icon-tabler" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="12" rx="1"/><path d="M7 20h10"/><path d="M9 16v4"/><path d="M15 16v4"/><path d="M9 12V8"/><path d="M12 12v-1"/><path d="M15 12v-2"/><path d="M12 12v-1"/></g>
                        </svg>
                        Análisis estadístico
                    </a>
                </li>
            </ul>
        </li>
        @endif

        {{-- Sala de Invitado --}}
        @if (Auth::user()->tipoUsuario->permiso->ver_invitado)
        <li class="mb-1" >
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li>
                    <a href="{{ route('invitado.login') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <g fill="none"><path d="M5.121 17.804A13.937 13.937 0 0 1 12 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 1 1-6 0a3 3 0 0 1 6 0zm6 2a9 9 0 1 1-18 0a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g>
                        </svg>
                        Invitado
                    </a>
                </li>
            </ul>
        </li>
        @endif

        {{-- Configuraciones del sistema  --}}
        @if (Auth::user()->tipoUsuario->permiso->ver_config)
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded text-light collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                Configuraciones
            </button>
            <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-2 small">
                <li>
                    <a href="{{ route('centro.justicia') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"  class="h4 me-1" aria-hidden="true" role="img" width="0.88em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 392 448"><path d="M262 247q16 16 30 0l90-89q13-15 0-30q-15-15-30 0l-90-90q16-14 0-29q-14-16-29 0l-90 87q-15 15 0 30q14 14 30 0l30 30l-60 59q-15-13-30 0L9 320q-15 15 0 30l27 34q16 16 30 0l105-105q6-6 6-14.5t-6-14.5l59-60l30 30q-12 12 2 27zm-29-119l-30-30l30-30l89 90l-30 30l-30-30z" fill="currentColor"/></svg>
                        Centro de justicia
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('roles') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M12.5 10.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1-.75-.75zm.75 4.75a.75.75 0 1 0 0 1.5h3.5a.75.75 0 1 0 0-1.5h-3.5zm-2.47-5.22a.75.75 0 1 0-1.06-1.06l-1.47 1.47l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2zm0 4.44a.75.75 0 0 1 0 1.06l-2 2a.75.75 0 0 1-1.06 0l-1-1a.75.75 0 1 1 1.06-1.06l.47.47l1.47-1.47a.75.75 0 0 1 1.06 0zm5.214-10.136A2.25 2.25 0 0 0 13.75 2h-3.5a2.25 2.25 0 0 0-2.236 2H6.25A2.25 2.25 0 0 0 4 6.25v13.5A2.25 2.25 0 0 0 6.25 22h11.5A2.25 2.25 0 0 0 20 19.75V6.25A2.25 2.25 0 0 0 17.75 4h-1.764l.008.084zm0 .012L16 4.25c0-.052-.002-.103-.005-.154zM10.25 6.5h3.5c.78 0 1.467-.397 1.871-1h2.129a.75.75 0 0 1 .75.75v13.5a.75.75 0 0 1-.75.75H6.25a.75.75 0 0 1-.75-.75V6.25a.75.75 0 0 1 .75-.75h2.129c.404.603 1.091 1 1.871 1zm0-3h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1 0-1.5z" fill="currentColor"/></g></svg>
                        Roles
                    </a>
                </li>

                <li>
                    <a href="{{ route('salas') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M10.821 2.003l.1.017l8.5 2a.75.75 0 0 1 .572.627L20 4.75v14.5a.75.75 0 0 1-.48.7l-.098.03l-8.5 2a.75.75 0 0 1-.915-.628L10 21.25V2.75a.75.75 0 0 1 .723-.75l.098.003zm.679 1.694v16.606l7-1.647V5.344l-7-1.647zM9 4v1.5H5.5v13H9V20H4.75a.75.75 0 0 1-.743-.648L4 19.25V4.75a.75.75 0 0 1 .648-.743L4.75 4H9zm5 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2z" fill="currentColor"/></g></svg>
                        Sala
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('audiencias') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M14.754 10c.966 0 1.75.784 1.75 1.75V15H16.5v.25a.75.75 0 0 1-1.5 0V13h.004v-1.25a.25.25 0 0 0-.25-.25H9.252a.25.25 0 0 0-.25.25V15H9v.25a.75.75 0 0 1-1.5 0V13h.002v-1.25c0-.966.783-1.75 1.75-1.75h5.502zm5.746 1.75v3.5a.75.75 0 0 0 1.5 0v-3.5A1.75 1.75 0 0 0 20.25 10h-3.375c.343.415.567.932.618 1.5h2.757a.25.25 0 0 1 .25.25zM2 15.25a.75.75 0 0 0 1.5 0v-3.5a.25.25 0 0 1 .25-.25h2.763a2.738 2.738 0 0 1 .618-1.5H3.75A1.75 1.75 0 0 0 2 11.75v3.5zM12 3a3 3 0 1 1 0 6a3 3 0 0 1 0-6zm0 1.5a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3zm6.5-.5a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5zm0 1.5a1 1 0 1 0 0 2a1 1 0 0 0 0-2zM5.5 4a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5zm0 1.5a1 1 0 1 0 0 2a1 1 0 0 0 0-2zM2.75 17a.75.75 0 0 0-.75.75v.5A3.75 3.75 0 0 0 5.75 22h12.5A3.75 3.75 0 0 0 22 18.25v-.5a.75.75 0 0 0-.75-.75H2.75zm3 3.5a2.25 2.25 0 0 1-2.236-2h16.972a2.25 2.25 0 0 1-2.236 2H5.75z" fill="currentColor"/></g></svg>
                        Tipo de audiencias
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('juicios') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M25 10.17c.492.175.925.473 1.262.859l7.99-1.998a1.004 1.004 0 0 1 .83.156c.112.08.207.182.278.302L40.054 17H42v.003c0 .69-.082 1.359-.236 1.997c-.833 3.45-3.77 6-7.264 6c-3.495 0-6.431-2.55-7.264-6A8.523 8.523 0 0 1 27 17h1.474l3.705-5.389l-5.18 1.295L27 13a3.001 3.001 0 0 1-2 2.83V38h3v2h6v2H14v-2h6v-2h3V15.83a3.01 3.01 0 0 1-1.567-1.277l-5.846 1.559l4.598 7.106h.935v.003c0 .69-.082 1.358-.236 1.997c-.833 3.45-3.77 6-7.264 6c-3.495 0-6.431-2.55-7.264-6a8.52 8.52 0 0 1-.236-2h1.208l5.855-8.295a1 1 0 0 1 .56-.39l7.285-1.942A3.004 3.004 0 0 1 23 10.171V6h2v4.17zM37.696 17l-3.236-5.177L30.901 17h6.795zm-19.893 6.218l-3.839-5.933l-4.188 5.933h8.027zM39.69 19c-.77 2.385-2.874 4-5.19 4c-2.316 0-4.42-1.615-5.19-4h10.38zm-20.88 6.218c-.77 2.385-2.874 4-5.19 4c-2.316 0-4.42-1.615-5.19-4h10.38zM24 14a1 1 0 1 0 0-2a1 1 0 0 0 0 2z" fill="currentColor"/></g></svg>
                        Tipo de juicios
                    </a>
                </li>

                <li>
                    <a href="{{ route('usuarios') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path class="clr-i-outline clr-i-outline-path-1" d="M17.9 17.3c2.7 0 4.8-2.2 4.8-4.9s-2.2-4.8-4.9-4.8S13 9.8 13 12.4c0 2.7 2.2 4.9 4.9 4.9zm-.1-7.7c.1 0 .1 0 0 0c1.6 0 2.9 1.3 2.9 2.9s-1.3 2.8-2.9 2.8c-1.6 0-2.8-1.3-2.8-2.8c0-1.6 1.3-2.9 2.8-2.9z" fill="currentColor"/><path class="clr-i-outline clr-i-outline-path-2" d="M32.7 16.7c-1.9-1.7-4.4-2.6-7-2.5h-.8c-.2.8-.5 1.5-.9 2.1c.6-.1 1.1-.1 1.7-.1c1.9-.1 3.8.5 5.3 1.6V25h2v-8l-.3-.3z" fill="currentColor"/><path class="clr-i-outline clr-i-outline-path-3" d="M23.4 7.8c.5-1.2 1.9-1.8 3.2-1.3c1.2.5 1.8 1.9 1.3 3.2c-.4.9-1.3 1.5-2.2 1.5c-.2 0-.5 0-.7-.1c.1.5.1 1 .1 1.4v.6c.2 0 .4.1.6.1c2.5 0 4.5-2 4.5-4.4c0-2.5-2-4.5-4.4-4.5c-1.6 0-3 .8-3.8 2.2c.5.3 1 .7 1.4 1.3z" fill="currentColor"/><path class="clr-i-outline clr-i-outline-path-4" d="M12 16.4c-.4-.6-.7-1.3-.9-2.1h-.8c-2.6-.1-5.1.8-7 2.4L3 17v8h2v-7.2c1.6-1.1 3.4-1.7 5.3-1.6c.6 0 1.2.1 1.7.2z" fill="currentColor"/><path class="clr-i-outline clr-i-outline-path-5" d="M10.3 13.1c.2 0 .4 0 .6-.1v-.6c0-.5 0-1 .1-1.4c-.2.1-.5.1-.7.1c-1.3 0-2.4-1.1-2.4-2.4c0-1.3 1.1-2.4 2.4-2.4c1 0 1.9.6 2.3 1.5c.4-.5 1-1 1.5-1.4c-1.3-2.1-4-2.8-6.1-1.5c-2.1 1.3-2.8 4-1.5 6.1c.8 1.3 2.2 2.1 3.8 2.1z" fill="currentColor"/><path class="clr-i-outline clr-i-outline-path-6" d="M26.1 22.7l-.2-.3c-2-2.2-4.8-3.5-7.8-3.4c-3-.1-5.9 1.2-7.9 3.4l-.2.3v7.6c0 .9.7 1.7 1.7 1.7h12.8c.9 0 1.7-.8 1.7-1.7v-7.6zm-2 7.3H12v-6.6c1.6-1.6 3.8-2.4 6.1-2.4c2.2-.1 4.4.8 6 2.4V30z" fill="currentColor"/></svg>
                        Control de usuarios
                    </a>
                </li>

                <li>
                    <a href="{{ route('config.obs') }}" class="link-light rounded d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h4 me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M18 11H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2m0 10H6v-4h12v4m0-6H6v-2h12v2M4.93 4.92l1.41 1.41c3.12-3.13 8.19-3.13 11.32 0l1.41-1.41C15.17 1 8.84 1 4.93 4.92m2.83 2.83l1.41 1.41a4.008 4.008 0 0 1 5.66 0l1.41-1.41a6 6 0 0 0-8.48 0z" fill="currentColor"/></svg>
                        Configurar IP OBS
                    </a>
                </li>
            </ul>
            </div>
        </li>
        @endif
    
        <li class="border-top my-3 mb-5"></li>
    </ul>
</div>






