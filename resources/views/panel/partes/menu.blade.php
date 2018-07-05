<aside id="s-main-menu" class="sidebar">
    <div class="smm-header">
        <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
    </div>

    <ul class="smm-alerts">
        <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-email"></i>
        </li>
        <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-notifications"></i>
        </li>
        <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-view-list-alt"></i>
        </li>
    </ul>

    <ul class="main-menu">
        <li>
            <a href="{{route('start-a')}}"><i class="zmdi zmdi-home"></i> Inicio</a>
        </li>
        <li class="sub-menu {{ isset($institucion)||isset($actividades)||isset($noticias)||isset($equipos) ? 'active' : '' }}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Pagina Web</a>

            <ul>
                <li class="{{ isset($institucion) ? 'active' : '' }}"><a href="{{route('institucion.index')}}">Informacion</a></li>
                <li class="{{ isset($actividades) ? 'active' : '' }}"><a href="{{route('actividades.index')}}">Actividades</a></li>
                <li class="{{ isset($noticias) ? 'active' : '' }}"><a href="{{route('noticias.index')}}">Noticias</a></li>
                <li class="{{ isset($equipos) ? 'active' : '' }}"><a href="{{route('equipos.index')}}">Equipo</a></li>

            </ul>
        </li>
        <li class="sub-menu {{ isset($admins)||isset($usuarios)||isset($empresas)||isset($emails)||isset($paises)||isset($ciudades)||isset($categorias)  ? 'active' : '' }}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Administracion</a>

            <ul>
                <li class="{{ isset($admins) ? 'active' : '' }}"><a href="{{route('administradores.index')}}">Administradores</a></li>
                <li class="{{ isset($usuarios) ? 'active' : '' }}"><a href="{{route('empresa.index')}}">Administradores de Empresa</a></li>
                <li class="{{ isset($usuarios) ? 'active' : '' }}"><a href="{{route('usuarios.index')}}">Usuarios</a></li>
                <li class="{{ isset($empresas) ? 'active' : '' }}"><a href="{{route('empresas.index')}}">Empresas</a></li>
                <li class="{{ isset($emails) ? 'active' : '' }}"><a href="{{route('email.index')}}">Correos</a></li>
                <li class="{{ isset($paises) ? 'active' : '' }}"><a href="{{route('pais.index')}}">Paises</a></li>
                <li class="{{ isset($ciudades) ? 'active' : '' }}"><a href="{{route('ciudades.index')}}">Ciudades</a></li>
                <li class="{{ isset($categorias) ? 'active' : '' }}"><a href="{{route('categorias.index')}}">Categorias</a></li>
            </ul>
        </li>
      
    </ul>
</aside>
