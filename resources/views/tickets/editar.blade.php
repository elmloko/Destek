@extends('layouts.app')

@section('content')

    {{-- <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Ticket</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body"> --}}
                            <div class="text-right">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Cancelar</a>
                            </div>
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                        @role('Autorizador')    
                        <section class="section">
                            <div class="section-header">
                                <h3 class="page__heading">Habilitar Ticket</h3>
                            </div>
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                        {!! Form::model($ticket, ['method' => 'PATCH','route' => ['tickets.update', $ticket->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="descripcion">Detalle del Problema</label>
                                    {!! Form::text('descripcion', null, array('class' => 'form-control','disabled' => 'disabled' )) !!}
                                </div>
                            </div>
                                        <label for="nombre">Nombre del solicitante</label>
                                        {!! Form::text('nombre', $ticket->nombre, array('class' => 'form-control', 'disabled' => 'disabled')) !!}
                                       
                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                            <div class="form-group">
                <h1>
                    
                </h1>
                <h1></h1>
                                            <label for=>Estado:</label>
                                <select name="estado" id="estado">
                                    <option value="por_aprobar" {{ $ticket->estado == 'por_aprobar' ? 'selected' : '' }}>por_aprobar</option>
                                    <option value="activo" {{ $ticket->estado == 'activo' ? 'selected' : '' }}>Activo
                                    </option>
                                    <option value="terminado" {{ $ticket->estado == 'terminado' ? 'selected' : '' }}>Terminado</option>
                                </select>
                                </div>
                                </div>
                
                                            <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Habilitar</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                       
                        
                        @endrole
                        @role('Administrador')    
                        <section class="section">
                            <div class="section-header">
                                <h3 class="page__heading">Editar Ticket</h3>
                            </div>
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                        {!! Form::model($ticket, ['method' => 'PATCH','route' => ['tickets.update', $ticket->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="descripcion">Detalle del Problema</label>
                                    {!! Form::text('descripcion', null, array('class' => 'form-control', )) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="solucion">Solucion</label>
                                    {!! Form::text('solucion', null, array('class' => 'form-control' )) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="form-group">

                            <label for=>Estado:</label>
                <select name="estado" id="estado">
                    <option value="por_aprobar" {{ $ticket->estado == 'por_aprobar' ? 'selected' : '' }}>por_aprobar</option>
                    <option value="activo" {{ $ticket->estado == 'activo' ? 'selected' : '' }}>Activo
                    </option>
                    <option value="terminado" {{ $ticket->estado == 'terminado' ? 'selected' : '' }}>Terminado</option>
                </select>
                </div>
                </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        @endrole
                        @role('Tecnico')    
                        <section class="section">
                            <div class="section-header">
                                <h3 class="page__heading">Editar Ticket</h3>
                            </div>
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                        {!! Form::model($ticket, ['method' => 'PATCH','route' => ['tickets.update', $ticket->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="descripcion">Detalle del Problema</label>
                                    {!! Form::text('descripcion', null, array('class' => 'form-control', )) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="solucion">Solucion</label>
                                    {!! Form::text('solucion', null, array('class' => 'form-control' )) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tecnico_id">Tecnico:</label>
                                <select class="form-control" id="tecnico_id" name="tecnico_id" >
                                    
                                    <option value="">Seleccione un tecnico</option>
                                    
                                    @foreach ($tecnicos as $tecnico)
                                        <option value="{{ $tecnico->id, $tecnico->nombre }}"
                                            {{ old('tecnico_id') == $tecnico->id ? 'selected' : 'nombre' }}>
                                            {{ $tecnico->nombre }}</option>
                                            {{ $tecnico->nombre }}
                                            
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="form-group">

                            <label for=>Estado:</label>
                <select name="estado" id="estado">
                    <option value="por_aprobar" {{ $ticket->estado == 'por_aprobar' ? 'selected' : '' }}>por_aprobar</option>
                    <option value="activo" {{ $ticket->estado == 'activo' ? 'selected' : '' }}>Activo
                    </option>
                    <option value="terminado" {{ $ticket->estado == 'terminado' ? 'selected' : '' }}>Terminado</option>
                </select>
                </div>
                </div>
             

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        
                        {!! Form::close() !!}
                      
                        
                        @endrole
                       
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
