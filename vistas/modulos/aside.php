        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="vistas/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Punto de Venta</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview"
                        role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a style="cursor:pointer" class="nav-link active"
                                onclick="CargarContenido('vistas/dashboard.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Principal
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Productos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a style="cursor:pointer;" class="nav-link"
                                        onclick="CargarContenido('vistas/registro_prod.php','content-wrapper')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registro</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="cursor:pointer;" class="nav-link"
                                        onclick="CargarContenido('vistas/productos.php','content-wrapper')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Consulta</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="cursor:pointer;" class="nav-link"
                                        onclick="CargarContenido('vistas/carga_masiva_productos.php','content-wrapper')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Carga Masiva</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="cursor:pointer;" class="nav-link"
                                        onclick="CargarContenido('vistas/categorias.php','content-wrapper')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categorias</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        

                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link"
                                onclick="CargarContenido('vistas/ventas.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Ventas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link"
                                onclick="CargarContenido('vistas/compras.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Compras
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link"
                                onclick="CargarContenido('vistas/reportes.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Reportes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link"
                                onclick="CargarContenido('vistas/configuraciones.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Configuraciones
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
<!-- Script para dejar seleccionado el lugar donde hicimos click en el menu side-bar -->
        <script>
            $(".nav-link").on('click', function(){
                $(".nav-link").removeClass('active');
                $(this).addClass('active');
            })
        </script>