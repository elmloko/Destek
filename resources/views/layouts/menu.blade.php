<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    @role('Administrador')    
    <a class="nav-link" href="./home">
        <i class=" fas fa-building"></i><span>Destek</span>
    </a>
    <a class="nav-link" href="./usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="./roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    <a class="nav-link" href="./areas">
        <i class=" fas fa-blog"></i><span>Areas</span>
    </a>
    <a class="nav-link" href="./tecnicos">
        <i class=" fas fa-file"></i><span>Tecnico</span>
    </a>
    @endrole
    @role('Tecnico')    
    <a class="nav-link" href="./home">
        <i class=" fas fa-building"></i><span>Destek</span>
    </a>
    <a class="nav-link" href="./usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="./roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    <a class="nav-link" href="./areas">
        <i class=" fas fa-blog"></i><span>Areas</span>
    </a>
    <a class="nav-link" href="./tecnicos">
        <i class=" fas fa-file"></i><span>Tecnico</span>
    </a>
    @endrole
    
    {{-- <a class="nav-link" href="./usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="./roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a> --}}
    <a class="nav-link" href="./tickets">
        <i class=" fas fa-file"></i><span>Ticket</span>
    </a>

</li>
