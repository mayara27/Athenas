<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="{{ url('css/estilo.css')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Help desk</title>

        <style type="text/css">
         	@charset "UTF-8";
        </style>

		    <link rel="stylesheet" href="{{ url('css/estilo.css')}}">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <h1>Inicio</h1>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="/home">Athena's HelpDesk</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href= "{{ route('login.logout') }}" >Sair</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('/horario/index')}}">
                            
                                Controle de Ponto
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Cliente
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">                                    
                                    <a class="nav-link" href="{{ url('/cliente/show')}}">Lista clientes</a>
                                    <a class="nav-link" href="{{ url('/cliente/create')}}">Novo Cliente</a>
                                </nav>
                            </div>

                            @if (Auth::user()->role == 'admin')
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Funcionário
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayout" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ url('/usuario/show')}}">Lista Funcionários</a>
                                        <a class="nav-link" href="{{ url('/usuario/create')}}">Novo Funcionário</a>
                                    </nav>
                                </div> 
                            @endif 
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Chamado
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('/chamado/create')}}">Novo Chamado</a>
                                    <a class="nav-link" href="{{ url('/chamado/show')}}">Todos Chamados</a>
                                </nav>
                            </div>

                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Desenvolvido por:</div>
                        Diana e Mayara
                    </div>
                </nav>
            </div>
       

        <div class="container mt-2 ml-15">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Excluir?</th>
                            <th scope="col">Editar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <div class="form-group col-md-6">
                                @foreach ($usuarios as $usuario)
                                <tr>
                                <td>{{ $usuario->id_usuario }}</td>
                                <td>{{ $usuario->nome_usuario }}</td>
                                <td>{{ $usuario->cargo }} ( {{ $usuario->nivel_acesso }} )</td>
                                <td>
                                    <form action="{{ route('usuario.destroy', $usuario->id_usuario)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Excluir Usuário</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('usuario.edit', $usuario->id_usuario)}}" method="get">
                                        @csrf
                                        <button class="btn btn-primary btn-sm" type="submit">Editar</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('usuario.info', $usuario->id_usuario)}}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary btn-sm" type="submit">Ver</button>
                                    </form>
                                </td>

                                </tr>
                                @endforeach
                            </div>
                            <tr>
                            
                            </tr>
                        </tbody>
                        </table>

                    <div id="layoutSidenav_content">
              
                        <footer class="py-4 bg-light mt-auto">
                            <div class="container-fluid">
                                <div class="d-flex align-items-center justify-content-between small">
                                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                                    <div>
                                        <a href="#">Privacy Policy</a>
                                        &middot;
                                        <a href="#">Terms &amp; Conditions</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </main>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js">[</script>
        <script type="text/javascript">
        	    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
                $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
                    if (this.href === path) {
                        $(this).addClass("active");
                    }
                });

            // Toggle the side navigation
            $("#sidebarToggle").on("click", function(e) {
                e.preventDefault();
                $("body").toggleClass("sb-sidenav-toggled");
            });
        </script>
    </body>
</html>
