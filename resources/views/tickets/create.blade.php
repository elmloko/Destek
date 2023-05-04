@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Ticket</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
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

                            {!! Form::open(['route' => 'tickets.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="descripcion">Detalle del Problema</label>
                                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Nombre del Solicitante</label>
                                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                               

                                    </div>
                                    <div class="row">

                                    <div class="form-group">
                                        <label for="area_id">Area:</label>
                                        <select class="form-control" id="area_id" name="area_id" required>
                                            <option value="">Seleccione un Area</option>

                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}"
                                                    {{ old('area_id') == $area->id ? 'selected' : '' }}>
                                                    {{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="tecnico_id">Tecnico:</label>
                                        <select class="form-control" id="tecnico_id" name="tecnico_id" >
                                            <option value="">Seleccione un tecnico</option>

                                            @foreach ($tecnicos as $tecnico)
                                                <option value="{{ $tecnico->id }}"
                                                    {{ old('tecnico_id') == $tecnico->id ? 'selected' : '3' }}>
                                                    {{ $tecnico->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    

                                    {{-- <div class="form-group">
                                        <label for="area_id">Tecnico:</label>
                                        <select class="form-control" id="area_id" name="area_id" required>
                                            <option value="">Seleccione un Area</option>

                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}"
                                                    {{ old('area_id') == $area->id ? 'selected' : '' }}>
                                                    {{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}

                                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="confirm-password">Confirmar Password</label>
                                    {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
                                </div> --}}
                                {{-- </div> --}}
                                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Roles</label>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                                </div>
                            </div> --}}
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    {{-- <button type="submit" class="btn btn-primary {{ $activo ? 'btn-success' : 'btn-danger' }}">Guardar</button> --}}

                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
