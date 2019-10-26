<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    <li class="header">MENU</li>

    <li class="<?php echo ( starts_with($route, TEACHER.'.dash') ) ? "active" : '' ?>">
        <a href="{{ route(TEACHER.'.dash') }}">
            <!-- <i class="fa fa-dashboard"></i> -->
            <img src="{{ asset('../icons/control_panel.png') }}" alt="" height="30">
            <span>Panel de Control</span>
        </a>
    </li>      

    

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/students.png') }}" alt="" height="30">
            <span>Estudiantes</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/admission.png') }}" alt="" height="30">
            <span>Adminsión</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/manage.png') }}" alt="" height="30">
            <span>Gestionar</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/promote.png') }}" alt="" height="30">
            <span>Promover</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/marks.png') }}" alt="" height="30">
            <span>Calificaciones</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/attendance.png') }}" alt="" height="30">
            <span>Asistencia</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/credentials.png') }}" alt="" height="30">
            <span>Credenciales</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/certificates.png') }}" alt="" height="30">
            <span>Certificados</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/money.png') }}" alt="" height="30">
            <span>Pagos</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/polls.png') }}" alt="" height="30">
            <span>Encuentas</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <img src="{{ asset('../icons/news.png') }}" alt="" height="30">
            <span>Noticias</span>
        </a>
    </li>

    

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.users') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.users.index') }}">
        <img src="{{ asset('../icons/user_.png') }}" alt="" height="30">
            <span>Usuarios</span>
        </a>
    </li>
    @endif


</ul>
