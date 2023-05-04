@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tecnicos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                      
            
                        @can('crear-tecnico')
                        <a class="btn btn-warning" href="{{ route('tecnicos.create') }}">Nuevo</a>
                        <div class="text-right">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
                        </div>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>                                                                 
                                    <th style="color:#fff;">Apellido</th>                                                                 
                              </thead>
                              <tbody>
                            @foreach ($tecnicos as $tecnico)
                            <tr>
                                <td style="display: none;">{{ $tecnico->id }}</td> 
                                <td>{{ $tecnico->nombre }}</td>                               
                                <td>{{ $tecnico->apellido }}</td>
                                <td>
                                    <form action="{{ route('tecnicos.destroy',$tecnico->id) }}" method="POST">                                        
                                        @can('editar-tecnico')
                                        <a class="btn btn-info" href="{{ route('tecnicos.edit',$tecnico->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-tecnico')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $tecnicos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
