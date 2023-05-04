@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Areas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-area')
                        <a class="btn btn-warning" href="{{ route('areas.create') }}">Nuevo</a>
                        <div class="text-right">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
                        </div>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>                                                                 
                              </thead>
                              <tbody>
                            @foreach ($areas as $area)
                            <tr>
                                <td style="display: none;">{{ $area->id }}</td>                                
                                <td>{{ $area->name }}</td>
                                <td>
                                    <form action="{{ route('areas.destroy',$area->id) }}" method="POST">                                        
                                        @can('editar-area')
                                        <a class="btn btn-info" href="{{ route('areas.edit',$area->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-area')
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
                            {!! $areas->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
