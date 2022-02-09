<div class="d-flex justify-content-center align-items-center">
    <div class="dropdown">
        {{-- btn options --}}
        <button class="btn btn-light rounded-circle d-flex justify-content-center align-items-center p-1"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h4 m-0" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g transform="rotate(90 10.5 10.5)"><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><circle cx="8.5" cy="8.5" r="8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.5 9.5c.5 0 1-.5 1-1s-.5-1-1-1s-.999.5-.999 1s.499 1 .999 1zm-4 0c.5 0 1-.5 1-1s-.5-1-1-1s-.999.5-.999 1s.499 1 .999 1zm8 0c.5 0 1-.5 1-1s-.5-1-1-1s-.999.5-.999 1s.499 1 .999 1z" fill="currentColor"/></g></g></svg>
        </button>
               
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            {{-- Agendar audiencia --}}
            @if ( Auth::user()->tipoUsuario->permiso->eliminar)
                {{-- validamos que la expediente este agendada, reagendada o cancelada para poder agendar  --}}
                @if ($estadoAudiencia->id === 1 || $estadoAudiencia->id === 2 || $estadoAudiencia->id === 5)
                    <li>
                        <a class="dropdown-item" href="{{ route('edit.room', encrypt($expedienteId) ) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19.5 4h-3V2.5a.5.5 0 0 0-1 0V4h-7V2.5a.5.5 0 0 0-1 0V4h-3A2.503 2.503 0 0 0 2 6.5v13A2.503 2.503 0 0 0 4.5 22h15a2.502 2.502 0 0 0 2.5-2.5v-13A2.502 2.502 0 0 0 19.5 4zM21 19.5c0 .828-.672 1.5-1.5 1.5h-15C3.67 21 3 20.328 3 19.5V11h18v8.5zm0-9.5H3V6.5C3 5.672 3.67 5 4.5 5h3v1.5a.5.5 0 0 0 1 0V5h7v1.5a.5.5 0 0 0 1 0V5h3c.828 0 1.5.672 1.5 1.5V10z" fill="currentColor"/></svg>
                            Reagendar
                        </a>
                    </li>
                @endif
            @endif
            {{-- eliminar dato --}}
            @if ( Auth::user()->tipoUsuario->permiso->eliminar)
                {{-- validamos que la expediente este agendada, reagendada o cancelada para poder agendar  --}}
                @if ($estadoAudiencia->id === 1 || $estadoAudiencia->id === 2 || $estadoAudiencia->id === 4 || $estadoAudiencia->id === 5 || $estadoAudiencia->id === 6)
                    <li>
                        <form action="{{route('delete.room', $expedienteId)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit" 
                            onclick="return confirm('¿Estas seguro de eliminar el expediente?')" title="Eliminar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><g fill="none"><path d="M11.5 4a1.5 1.5 0 0 0-3 0h-1a2.5 2.5 0 0 1 5 0H17a.5.5 0 0 1 0 1h-.554L15.15 16.23A2 2 0 0 1 13.163 18H6.837a2 2 0 0 1-1.987-1.77L3.553 5H3a.5.5 0 0 1-.492-.41L2.5 4.5A.5.5 0 0 1 3 4h8.5zm3.938 1H4.561l1.282 11.115a1 1 0 0 0 .994.885h6.326a1 1 0 0 0 .993-.885L15.438 5zM8.5 7.5c.245 0 .45.155.492.359L9 7.938v6.125c0 .241-.224.437-.5.437c-.245 0-.45-.155-.492-.359L8 14.062V7.939c0-.242.224-.438.5-.438zm3 0c.245 0 .45.155.492.359l.008.079v6.125c0 .241-.224.437-.5.437c-.245 0-.45-.155-.492-.359L11 14.062V7.939c0-.242.224-.438.5-.438z" fill="currentColor"/></g></svg>
                            Eliminar
                            </button>
                        </form>
                    </li>
                @endif
            @endif

           {{--  <li>
                <a class="dropdown-item" href="#"><span class="iconify me-1" data-icon="simple-icons:jsonwebtokens"></span>Obtener Token</a>
            </li> --}}

            {{-- Imprimir expediente --}}
            @if ( Auth::user()->tipoUsuario->permiso->descargar)
            <li>
                <a class="dropdown-item" href="{{ route('show.pdf.expediente', encrypt($expedienteId)) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M420 128.1V16H92v112.1A80.1 80.1 0 0 0 16 208v192h68v-32H48V208a48.054 48.054 0 0 1 48-48h320a48.054 48.054 0 0 1 48 48v160h-44v32h76V208a80.1 80.1 0 0 0-76-79.9zm-32-.1H124V48h264z"/><path fill="currentColor" d="M396 200h32v32h-32z"/><path fill="currentColor" d="M116 264H76v32h40v200h272V296h40v-32H116zm240 200H148V296h208z"/></svg>
                    Imprimir expediente
                </a>
            </li>
            @endif

            {{-- Cancelar audiencias --}}
            @if ( Auth::user()->tipoUsuario->permiso->cancelar)
                {{-- validamos que la expediente este agendada, reagendada o cancelada para poder agendar  --}}
                @if ($estadoAudiencia->id === 1 || $estadoAudiencia->id === 2)
                    <li>
                        <form action="{{route('cancelar.room', $expedienteId)}}" method="post">
                            @csrf
                            @method('PUT')
                            <button class="dropdown-item" type="submit" 
                            onclick="return confirm('¿Estas seguro de cancelar la audiencia?')" title="Eliminar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><g fill="none"><path d="M14.5 3A2.5 2.5 0 0 1 17 5.5v4.1a5.465 5.465 0 0 0-1-.393V7H4v7.5A1.5 1.5 0 0 0 5.5 16h3.707c.099.349.23.683.393 1H5.5A2.5 2.5 0 0 1 3 14.5v-9A2.5 2.5 0 0 1 5.5 3h9zm0 1h-9A1.5 1.5 0 0 0 4 5.5V6h12v-.5A1.5 1.5 0 0 0 14.5 4zM19 14.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0zm-4.5.707l1.146 1.147a.5.5 0 0 0 .708-.708L15.207 14.5l1.147-1.146a.5.5 0 0 0-.708-.708L14.5 13.793l-1.146-1.147a.5.5 0 0 0-.708.708l1.147 1.146l-1.147 1.146a.5.5 0 0 0 .708.708l1.146-1.147z" fill="currentColor"/></g></svg>
                                Cancelar audiencia
                            </button>
                        </form>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</div>