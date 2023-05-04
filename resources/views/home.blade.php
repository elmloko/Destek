@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">DESTEK</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">
                                    
                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                               <h5>Usuarios</h5>                                               
                                                @php
                                                 use App\Models\User;
                                                $cant_usuarios = User::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>

                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                               <h5>Roles</h5>                                               
                                                @php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Areas</h5>                                               
                                                @php
                                                 use App\Models\Area;
                                                $cant_areas = Area::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-area f-left"></i><span>{{$cant_areas}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/areas" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Tecnicos</h5>                                               
                                                @php
                                                 use App\Models\Tecnico;
                                                $cant_tecnicos = Tecnico::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-area f-left"></i><span>{{$cant_tecnicos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/tecnicos" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Tickets</h5>                                               
                                                @php
                                                 use App\Models\Ticket;
                                                $cant_tickets= Ticket::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-Ticket f-left"></i><span>{{$cant_tickets}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/tickets" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

