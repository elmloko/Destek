@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<section class="section">
  <div class="section-header">
    
      <h3 class="page__heading">Tickets</h3>
      <h3></h3>
     
    
  </div>
  <div class="text-right">
    <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
</div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">

                    <form action="{{ route('tickets.buscar') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar" name="q" value="{{ old('q') }}">
            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
        </div>
    </form>

                  
                       <div class="card-body">               
                          <a class="btn btn-warning" href="{{ route('tickets.create') }}">Nuevo</a>        
                          @if (count($tickets) > 0)

                          <table class="table table-striped mt-2">
                            <thead style="background-color:#6777ef">                                     
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Id</th>
                                <th style="color:#fff;">Descripcion</th>
                                <th style="color:#fff;">Solucion</th>
                                <th style="color:#fff;">Estados</th>
                                <th style="color:#fff;">Area</th>
                                <th style="color:#fff;">Tecnico</th>
                                <th style="color:#fff;">Usuario</th>
                                <th style="color:#fff;">creado</th>
                                <th style="color:#fff;">actualizado</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr>
                                        <td style="display: none;">{{ $ticket->id }}</td>
                                        <td>{{ $ticket->id }}</td>
                                        <td>{{ $ticket->descripcion }}</td>
                                        <td>{{ $ticket->solucion }}</td>
                                        <td class="@if($ticket->estado == 'por_aprobar') estado-por-aprobar
                                           @elseif($ticket->estado == 'activo') estado-activo 
                                           @elseif($ticket->estado == 'terminado') estado-inactivo @endif">{{ $ticket->estado }}</td>
                                        <td>{{ $ticket->area->name }}</td>
                                        <td>{{ optional($ticket->tecnico)->nombre }}</td>
                                        <td>{{ $ticket->nombre }}</td>
                                        <td>{{ $ticket->created_at }}</td>
                                        <td>{{ $ticket->updated_at }}</td>
                                        <td>  
                                            @role('Administrador')    
                                                <a class="btn btn-info" href="{{ route('tickets.edit', $ticket->id) }}">Editar</a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['tickets.destroy', $ticket->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endrole
                                            @role('Autorizador')
                                                <a class="btn btn-info" href="{{ route('tickets.edit', $ticket->id) }}">Habilitar</a>
                                            @endrole
                                            @role('Tecnico')
                                                <a class="btn btn-info" href="{{ route('tickets.edit', $ticket->id) }}">Atender</a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['tickets.destroy', $ticket->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endrole
                                        </td>
                                    </tr>
                                @endforeach
                                @else 
                                <p> no hay el ticket</p>
                                @endif
                            </tbody>
                        </table>
                        
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $tickets->links() !!}
                          </div>     
                            
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection