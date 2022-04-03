<!-- Logo -->
<a href="{{ route('home') }}" class="brand-link">
    <img src="{{ asset('dist/img/proeza.png') }}" class="brand-image img-circle m-1">
    <span class="brand-text font-weight-light">PROEZA SRL</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @can('dashboards')
                <li class="nav-item menu-close">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Carpetas</p>
                                <span class="right badge badge-danger">New</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('print') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabla</p>
                                <span class="right badge badge-danger">New</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan

            @can('permissions.index')
                <li class="nav-item">
                    <a href="{{ route('permissions.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Permisos
                        </p>
                    </a>
                </li>
            @endcan
            @can('roles.index')
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Roles
                        </p>
                    </a>
                </li>
            @endcan
            @can('cities.index')
                <li class="nav-item">
                    <a href="{{ route('cities.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Departamentos
                        </p>
                    </a>
                </li>
            @endcan
            @can('agencies.index')
                <li class="nav-item">
                    <a href="{{ route('agencies.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Agencias
                        </p>
                    </a>
                </li>
            @endcan
            @can('users.index')
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
            @endcan
            @can('warranties.index')
                <li class="nav-item">
                    <a href="{{ route('warranties.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Garantía
                        </p>
                    </a>
                </li>
            @endcan
            @can('courts.index')
                <li class="nav-item">
                    <a href="{{ route('courts.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Juzgados
                        </p>
                    </a>
                </li>
            @endcan
            @can('subjects.index')
                <li class="nav-item">
                    <a href="{{ route('subjects.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Materias
                        </p>
                    </a>
                </li>
            @endcan
            @can('steps.index')
                <li class="nav-item">
                    <a href="{{ route('steps.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Etapas
                        </p>
                    </a>
                </li>
            @endcan
            @can('transfers.index')
                <li class="nav-item">
                    <a href="{{ route('transfers.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p class="justify-content-center">
                            Documentos en custodia
                        </p>
                    </a>
                </li>
            @endcan
            @can('returneds.index')
                <li class="nav-item">
                    <a href="{{ route('returneds.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Formu Devolución
                        </p>
                    </a>
                </li>
            @endcan
            @can('folders.index')
                <li class="nav-item">
                    <a href="{{ route('folders.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Formu. Tras. de carpetas
                        </p>
                    </a>
                </li>
            @endcan
            @can('starts.index')
                <li class="nav-item">
                    <a href="{{ route('starts.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Solicitud de AL
                        </p>
                    </a>
                </li>
            @endcan
            @can('movements.index')
                <li class="nav-item">
                    <a href="{{ route('movements.todo') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Movimientos pendientes
                        </p>
                    </a>
                </li>
            @endcan
            <li class="nav-item menu-close">
                <a class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Contratos
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @can('acontracts.index')
                        <li class="nav-item">
                            <a href="{{ route('acontracts.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Cbba/LaPaz
                                </p>
                                <span class="right badge badge-danger">New</span>
                            </a>
                        </li>
                    @endcan
                    @can('bcontracts.index')
                        <li class="nav-item">
                            <a href="{{ route('bcontracts.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Cbba/SC/LP Lic. Arze
                                </p>
                                <span class="right badge badge-danger">New</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        </ul>
    </nav>
</div>
