<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">

            
            <!-- Optionally, you can add icons to the links -->
            
            <li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-bar-chart'></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{ url('summary/create') }}">Nuevo Movimiento</a></li>
                    <li><a href="{{ url('summary/summary') }}">Lista de Movimientos</a></li>
                </ul>
            </li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-code-fork'></i> <span>Categorias</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('categories/create') }}">Crear Categoria</a></li>
                    <li><a href="{{ url('categories/categories') }}">Lista de categorias</a></li>
                </ul>
            </li>
       

            <li class="treeview">
                <a href="#"><i class='fa fa-bank'></i> <span>Cuentas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('account/create') }}">Crear Cuenta</a></li>
                    <li><a href="{{ url('account/account') }}">Lista de cuentas</a></li>
                </ul>
            </li>
            <li><a href="{{ url('users/users') }}"><i class='fa fa-user'></i> <span>Usuarios</span></a></li>
            <li><a href="{{ asset('/calendario/inicio.html') }}"><i class='fa fa-history'></i> <span>Calendario</span></a></li>
            <li><a href="{{ asset('/contacto/contacto.html') }}"><i class='fa fa-home'></i> <span>Contacto</span></a></li>
            </li>
            
          <!--   <li> <a href="{{ url('attached/attached') }}"><i class='fa fa-paperclip'></i> <span>Adjuntos</span></a></li> -->
    
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
    