<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('imagen')}}/{{Auth::user()->imagen}}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p>Hola!, {{ucwords(Auth::user()->nombre)}}</p>

            <a href="#"><i class="fa fa-circle text-success"></i> En Linea</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
            <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="active">
            <a href="{{route('start-a')}}">
                <i class="fa fa-dashboard"></i> <span>Inicio</span>
            </a>
        </li>
        @if(Auth::user()->tipo=="Sadministrador")
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Pagina Web</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">   
                <li><a href="{{route('institucion.index')}}"><i class="fa fa-angle-double-right"></i> Institucion</a></li>
                <li><a href="{{route('equipo.index')}}"><i class="fa fa-angle-double-right"></i> Equipo</a></li>
                <li><a href="{{route('planes.index')}}"><i class="fa fa-angle-double-right"></i> Planes</a></li>
            </ul>
        </li>
        @endif
        @if(Auth::user()->tipo=="Administrador" || Auth::user()->tipo=="Sadministrador")
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Administracion</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">   
                <li><a href="{{route('usuarios.index')}}"><i class="fa fa-angle-double-right"></i> Usuarios</a></li>
                <li><a href="{{route('preregistro.index')}}"><i class="fa fa-angle-double-right"></i> Pre Registros</a></li>                
                <li><a href="{{route('empresas.index')}}"><i class="fa fa-angle-double-right"></i> Empresas</a></li>
                <li><a href="{{route('email.index')}}"><i class="fa fa-angle-double-right"></i> Correos</a></li>
                <li><a href="{{route('actividades.index')}}"><i class="fa fa-angle-double-right"></i> Actividades</a></li>
                <li><a href="{{route('pais.index')}}"><i class="fa fa-angle-double-right"></i> Pais</a></li>
                <li><a href="{{route('ciudad.index')}}"><i class="fa fa-angle-double-right"></i> Ciudad</a></li>
                <li><a href="{{route('categoria.index')}}"><i class="fa fa-angle-double-right"></i> Categorias</a></li>
                <li><a href="{{route('productos.index')}}"><i class="fa fa-angle-double-right"></i> Productos</a></li>
            </ul>
        </li>
        @endif
    </ul>

</section>
<!-- /.sidebar -->